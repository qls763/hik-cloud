<?php

namespace HikCloud;

class HikApiClassMap
{
    private static $map = [
        // 授权
        'OAuth' => [
            'Token' => 'HikCloud\\RestApi\\OAuth\\Token'
        ],

        // 社区管理（v1）
        'Communities' => [
            'Add' => 'HikCloud\\RestApi\\Estate\\System\\Communities\\CommunityAdd',
            'Update' => 'HikCloud\\RestApi\\Estate\\System\\Communities\\CommunityUpdate',
            'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Communities\\CommunityDelete',
            'List' => 'HikCloud\\RestApi\\Estate\\System\\Communities\\CommunityList',
        ],

        //房屋管理
        'Buildings' => [
            'Add' => 'HikCloud\\RestApi\\Estate\\System\\Buildings\\BuildingsAdd',
            'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Buildings\\BuildingsDelete'
        ],

        //单元管理
        'Units' => [
            'Add' => 'HikCloud\\RestApi\\Estate\\System\\Units\\UnitAdd',
            'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Units\\UnitDelete'
        ],

        //户室管理
        'Rooms' => [
            'Add' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomAdd',
            'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomDelete',
            'Info' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomInfo',
            'InfoById' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomInfoById'
        ]
    ];

    /**
     * @param string $api_name
     * @return string|boolean
     */
    public static function getClassName(string $api_name)
    {
        $api_name = explode('.', $api_name);
        $api = self::$map;
        foreach ($api_name as $value) {
            if (!isset($api[$value])) {
                return false;
            }
            $api = $api[$value];
        }
        if (!is_string($api)) {
            return false;
        }
        return $api;
    }
}