<?php


namespace HikCloud\RestApi\Car\Community\Park;


use HikCloud\RestApi\HikRestApi;

class ParkList extends HikRestApi
{

    protected $api = '/api/v1/community/park/list';

    public $method = 'GET';
    public $header;

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => ''
    ];


}