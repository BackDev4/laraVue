<?php

namespace App\Http\Controllers\Auth;


use App\Models\BusinessInfo;
use App\Models\User;
use App\Services\INNInfoService;
use App\Services\UserSmsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterStepsController extends Controller
{

    public function registerForm(Request $request)
    {
        if ($request->isMethod('post')) {

            $valid = $request->validate([
                'email' => 'required|unique:users|string|email|max:255',
                'password' => 'min:6|string|required',
                'phone' => 'required|unique:users',
                'name' => 'required|string|max:50'
            ]);

            Session::put('step', 2);
            Session::put("registerForm", $valid);
            return redirect()->route('register.step.2');
        } else {
            return view('auth.register.form');
        }
    }

    /**
     * @throws \Exception
     */
    public function checkSMS(Request $request, UserSmsService $userSmsService) // Вот тут, после кода, будут данные для сохранения всей информации
    {
        if ($request->isMethod('post')) {
            $inputCode = $request->input('code');

            if($inputCode == Session::get('sms_code')) {
                Session::put('step', 3);
                return redirect()->route('register.step.3');
            } else {
                return redirect()->back();
            }

        } else {
            $this->sendCode($userSmsService);
            return view('auth.register.security-code');
        }
    }

    public function businessForm(Request $request, INNInfoService $infoService)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'inn' => 'required|unique:business_infos'
            ]);

            $info = $infoService->info($request->input('inn'));
            Session::put('businessInfo', $info);
            Session::put('step', 4);
            return redirect()->route('register.step.4');
        } else {
            return view('auth.register.inn');
        }
    }

    public function checkInputData(Request $request)
    {
        if ($request->isMethod('post')) {

            $businessInfo = $request->validate([
                'inn' => 'required|string',
                'fullName' => 'required|string',
                'dateReg' => 'required',
                'ogrnip' => 'required|string',
                'okved' => 'required|string',
                'address' => 'required|string',
                'nameOfServ' => 'required|string',
                'oktmo' => 'required|string',
                'taxCode' => 'required|string',
            ]);

            $userInfo = Session::get('registerForm');
            $userInfo['password'] = Hash::make($userInfo['password']);

            $user = User::create($userInfo);
            BusinessInfo::create(array_merge($businessInfo, [
                'user_id' => $user->id
            ]));

            Auth::login($user);

            return redirect()->route('lk');
        } else {
            return view('auth.register.check_input');
        }

    }

    /**
     * @throws \Exception
     */
    private function generateCode()
    {
        return random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9);
    }

    private function sendCode(UserSmsService $userSmsService)
    {
        if(!Session::exists('sms_code')) {
            $code = $this->generateCode();
            Session::put('sms_code', $code);
            $userInfo = Session::get('registerForm');
            $message = "Здравствуйте " . $userInfo['name'] . ", ваш код подтверждения: " . $code;
            $userSmsService->sendTextMessage($message, $userInfo['phone']);
        }
    }
}
