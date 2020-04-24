<?php


namespace HikCloud\RestApi\Estate\System\Communities;


use HikCloud\RestApi\HikRestApi;

class CommunityList extends HikRestApi
{

    protected $api = '/api/v1/estate/system/communities/actions/list';

    protected $required_params = [
        'pageNo' => '',
        'pageSize' => ''
    ];


}