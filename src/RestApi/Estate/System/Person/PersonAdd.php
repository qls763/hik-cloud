<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonAdd extends HikRestApi
{
    protected $api = '/api/v1/estate/system/person';

    public $method = 'POST';

    protected $required_params = [
        'personName' => '',
        'credentialType' => '',
        'credentialNumber' => '',
        'mobile' => ''
    ];

    protected $optional_params = [
        'gender' => '',
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
        'countyCode' => '',
        'personCommunityRels' => [
            'communityId' => '',
            'buildingId' => '',
            'unitId' => '',
            'roomId' => '',
            'identityType' => '',
            'checkInDate' => '',
            'checkOutDate' => ''
        ]
    ];


}