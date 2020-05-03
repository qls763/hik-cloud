<?php


namespace HikCloud\RestApi\Estate\System\Person;


class PersonInfoList extends \HikCloud\RestApi\HikRestApi
{

    public $api = '/api/v1/estate/system/person/actions/personInfoList';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => '',
    ];
}