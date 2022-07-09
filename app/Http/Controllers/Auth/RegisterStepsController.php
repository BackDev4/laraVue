<?php

namespace App\Http\Controllers\Auth;


use App\Services\INNInfoService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterStepsController extends Controller
{

    public function registerForm(Request $request)
    {
        if ($request->isMethod('post')) {
            Session::put('step', 2);
            Session::put("registerForm", $request->all());
            return redirect()->route('register.step.2');
        } else {
            return view('auth.register.form');
        }
    }

    public function businessForm(Request $request, INNInfoService $infoService)
    {
        if ($request->isMethod('post')) {
            $info = $infoService->info($request->input('inn'));
            Session::put('businessInfo', $info);
            Session::put('step', 3);
            return redirect()->route('register.step.3');
        } else {
            return view('auth.register.inn');
        }
    }

    public function checkInputData(Request $request)
    {
        if ($request->isMethod('post')) {
            Session::put('step', 4);
            Session::put('businessInfo', $request->all());
            return redirect()->route('register.step.4');
        } else {
            return view('auth.register.check_input');
        }

    }

    public function checkSMS(Request $request) // Вот тут, после кода, будут данные для сохранения всей информации
    {
        if ($request->isMethod('post')) {

        } else {
            return view('auth.register.security-code');
        }
    }

}
