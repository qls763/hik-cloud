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
            'Add' => 'HikCloud\\RestApi\\Estate\\System\\Buildings\\BuildingAdd',
            'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Buildings\\BuildingDelete'
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
        ],

        //车辆社区管理
        'Car'=>[
            //授权
            'OAuth' => [
                'Token' => 'HikCloud\\RestApi\\OAuth\\CarToken'
            ],
            //社区
            'Community' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\CommunityAdd',
                'Update' => 'HikCloud\\RestApi\\Car\\Community\\CommunityUpdate',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\CommunityDelete',
                'List' => 'HikCloud\\RestApi\\Car\\Community\\CommunityList',
                'Detail' => 'HikCloud\\RestApi\\Car\\Community\\CommunityDetail'
            ],
            //停车场
            'Park' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\Park\\ParkAdd',
                'Update' => 'HikCloud\\RestApi\\Car\\Community\\Park\\ParkUpdate',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\Park\\ParkDelete',
                'List' => 'HikCloud\\RestApi\\Car\\Community\\Park\\ParkList',
            ],
            //固定车辆
            'Regulars' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\Regulars\\RegularsAdd',
                'Update' => 'HikCloud\\RestApi\\Car\\Community\\Regulars\\RegularsUpdate',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\Regulars\\RegularsDelete',
                'List' => 'HikCloud\\RestApi\\Car\\Community\\Regulars\\RegularsList',
            ],
            //访客车辆
            'Visitors' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\Visitors\\VisitorsAdd',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\Visitors\\VisitorsDelete',
                'List' => 'HikCloud\\RestApi\\Car\\Community\\Visitors\\VisitorsList',
            ],
            //黑名单
            'Alarms' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\Alarms\\AlarmsAdd',
                'Update' => 'HikCloud\\RestApi\\Car\\Community\\Alarms\\AlarmsUpdate',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\Alarms\\AlarmsDelete',
            ]
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