<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonUpdate extends HikRestApi
{

    protected $api = '/api/v1/estate/system/person/actions/updatePerson';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'personName' => '',
        'gender' => '',
        'credentialType' => '',
        'credentialNumber' => '',
        'mobile' => ''
    ];

    protected $optional_params = [
        'birthday' => '',
        'personRemark' => '',
        'nation' => '',
        'educationalLevel' => '',
        'workUnit' => '',
        'position' => '',
        'religion' => '',
        'englishName' => '',
        'email' => '',
        'addressDetail' => '',
        'provinceCode' => '',
        'cityCode' => '',
        'countyCode' => ''
    ];
}