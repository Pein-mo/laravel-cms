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
                            'title' => '微信菜单管理',
                            'permission' => '',
                            'url' => '/wx/wx_menu',
                        ],
                ],
        ],
    
];
