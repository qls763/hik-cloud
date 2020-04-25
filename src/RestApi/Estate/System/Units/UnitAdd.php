<?php


namespace HikCloud\RestApi\Estate\System\Units;


use HikCloud\RestApi\HikRestApi;

class UnitAdd extends HikRestApi
{

    protected $api = '/api/v1/estate/system/rooms';

    public $method = 'POST';

    protected $required_params = [
        'buildingId' => '',
        'unitName' => '',
        'unitNumber' => ''
    ];

    protected $optional_params = [
        'unionId' => ''
    ];
}