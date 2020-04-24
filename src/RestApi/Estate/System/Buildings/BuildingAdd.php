<?php


namespace HikCloud\RestApi\Estate\System\Communities;


use HikCloud\RestApi\HikRestApi;

class BuildingAdd extends HikRestApi
{

    protected $api = '/api/v1/estate/system/buildings';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'communityId' => '',
        'buildingName' => '',
        'buildingNumber' => '',
        'floorUpCount' => '',
        'floorFamilyCount' => '',
        'buildingUnitSize' => ''
    ];

    protected $optional_params = [
        'unionId' => '',
        'floorDownCount' => '',
        'buildingRemark' => ''
    ];
}