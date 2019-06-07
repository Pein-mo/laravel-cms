<?php return [
    'wx' =>
        [
            'title' => '微信管理',
            'icon' => 'fa fa-navicon',
            'permission' => '权限标识',
            'menus' =>
                [

                    [
                        'title' => '配置管理',
                        'permission' => '',
                        'url' => '/wx/wx_config',
                    ],

                    [
                        'title' => '微信菜单',
                        'permission' => '',
                        'url' => '/wx/wx_menu',
                    ],

                    [
                        'title' => '基本回复',
                        'permission' => '',
                        'url' => '/wx/wx_reply_base',
                    ],
                ],
        ],
];
