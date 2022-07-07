<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterStepsController extends Controller
{

    public function registerForm(Request $request)
    {
        Session::put("registerForm", [
            "login" => $request->input('login'),
            "number" => $request->input("number"),
            "password" => $request->input(Hash::make("password")),
            "email" => $request->input("email")
        ]);
    }

    public function businessForm(Request $request)
    {
        Session::put("businessForm", [
            "inn" => $request->input('inn')
        ]);
    }

    public function checkInputData(Request $request)
    {
        Session::put("registerForm", [
            "fullname" => $request->input("fullName"),
            "date" => $request->input("date"),
            "ogrnip" => $request->input("ogrnip"),
            "okved" => $request->input("okved"),
            "dateReg" => $request->input("dateReg"),
            "nameOfServ" => $request->input("nameOfServ"),
            "oktmo" => $request->input("oktmo"),
            "taxCode" => $request->input("taxCode"),
            ]);
    }

    public function checkSMS(Request $request)
    {

    }

}
