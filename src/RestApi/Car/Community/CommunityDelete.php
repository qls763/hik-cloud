<?php


namespace HikCloud\RestApi\Car\Community;


use HikCloud\RestApi\HikRestCarApi;

class CommunityDelete extends HikRestCarApi
{

    protected $api = '/api/v1/community/delete';

    public $method = 'DELETE';
    public $header;

    protected $required_params = [
        'communityIds' => '',
    ];
}