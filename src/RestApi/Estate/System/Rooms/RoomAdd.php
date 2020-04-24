<?php


namespace HikCloud\RestApi\Estate\System\Rooms;


use HikCloud\RestApi\HikRestApi;

class RoomAdd extends HikRestApi
{
    protected $api = '/api/v1/estate/system/rooms';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'unitId' => '',
        'floorNumber' => '',
        'roomNumber' => ''
    ];

    protected $optional_params = [
        'unionId' => ''
    ];
}