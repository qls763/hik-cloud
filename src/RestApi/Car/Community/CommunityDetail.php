<?php


namespace HikCloud\RestApi\Car\Community;


use HikCloud\RestApi\HikRestCarApi;

class CommunityDetail extends HikRestCarApi
{

    protected $api = '/api/v1/community/detail';

    public $method = 'GET';
    public $header;

    protected $required_params = [
        'communityId' => ''
    ];
}