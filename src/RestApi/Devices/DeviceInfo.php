<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class DeviceInfo extends HikRestOutApi
{
    protected $api = '/v1/devices/{deviceId}/info';

    public $method = 'GET';
    public $header;

    protected $required_params = [
        'deviceId' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function initUri()
    {
        $this->api = preg_replace('/\\{deviceId\\}/', $this->required_params['deviceId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }

}