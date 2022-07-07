<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;

class UserSmsService {

    private string $token;
    public function __construct()
    {
        $response = Http::post("https://online.sigmasms.ru/api/login", [
            "username" => config("sms.username"),
            "password" => config("sms.password")
        ]);
        $this->token = $response->json('token');
    }

    public function message($message, $phone)
    {
        $result = Http::withHeaders([
            "Authorization" => $this->token
        ])->post("https://online.sigmasms.ru/api/sendings", [
            "recipient" => $phone,
            "type" => "sms",
            "payload" => [
                "sender" => "B-Media",
                "text" => "Hello"
            ]
        ]);
        dd($result->body());
    }
}
