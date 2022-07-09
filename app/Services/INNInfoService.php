<?php

namespace App\Services;

use Dadata\DadataClient;

class INNInfoService
{

    private DadataClient $client;

    public function __construct()
    {
        $this->client = new DadataClient(config('dadata.api_key'), config('dadata.api_secret'));
    }

    public function info($inn) : array
    {
        $result = $this->client->findById('party', $inn, 1);
        $result = $result[0] ?? [];
        return [
            'inn' => $inn,
            'fullName' => $result['data']['management']['name'] ?? "",
            'dateReg' => ($result['data']['state']['registration_date'] ?? 1 / 1000) ?? "",
            'ogrnip' => $result['data']['ogrn'] ?? "",
            'okved' => $result['data']['okved'] ?? "",
            'address' => $result['data']['address']['value'] ?? "",
            'nameOfServ' => "",
            'oktmo' => $result['data']['oktmo'] ?? "",
            'taxCode' => ""
        ];
    }
}
