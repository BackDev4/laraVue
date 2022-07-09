<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;

class UserSmsService {

    private string $username;
    private string $password;
    private string $origin_id;

    public function __construct()
    {
        $this->username = config('sms.username');
        $this->password = config('sms.password');
        $this->origin_id = config('sms.origin_id');
    }

    public function sendTextMessage(string $message, $phone) : void
    {
        $url = "https://smsimple.ru/http_send.php?user={$this->username}&pass={$this->password}&or_id={$this->origin_id}&phone=$phone&message=$message";
        Http::get($url);
    }
}
