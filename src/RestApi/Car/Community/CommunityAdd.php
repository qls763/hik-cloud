<?php


namespace HikCloud\RestApi\Car\Community;


use HikCloud\RestApi\HikRestCarApi;

class CommunityAdd extends HikRestCarApi
{

    protected $api = '/api/v1/community/add';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'name' => ''
    ];

    protected $optional_params = [
        'parentId' => ''
    ];
}