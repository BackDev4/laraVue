<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterStepsController extends Controller
{

    public function registerForm(Request $request)
    {
        Session::put("registerForm", [
            "login" => "Login",
            "password" => Hash::make("password"),
            "email" => "..."
        ]); // пример
    }

    public function businessForm()
    {
        ession::put("businessForm", [
            "login" => "Login",
            "password" => Hash::make("password"),
            "email" => "..."
        ]); // пример
    }

    public function checkInputData()
    {

    }

    public function checkSMS()
    {

    }

}
