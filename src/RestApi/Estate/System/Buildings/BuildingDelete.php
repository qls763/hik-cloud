<?php


namespace HikCloud\RestApi\Estate\System\Communities;


use HikCloud\RestApi\HikRestApi;

class BuildingDelete extends HikRestApi
{

    protected $api = '/api/v1/estate/system/buildings/{buildingId}';

    public $method = 'DELETE';
    public $header;

    protected $required_params = [
        'buildingId' => '',
    ];

    public function initUri()
    {
        $this->api = preg_replace('/{buildingId}/', $this->required_params['buildingId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }
}