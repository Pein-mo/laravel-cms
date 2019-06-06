<?php


namespace App\Services;


use Houdunwang\WeChat\WeChat;
use Modules\Wx\Entities\WxConfig;

class WeChatService
{
    public function __construct()
    {
        $config =array_merge(include base_path('config').'/wechat.php',WxConfig::pluck('value','name')->toArray());
        (new WeChat)->config($config);
        (new WeChat)->valid();
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        return call_user_func_array([WeChat::class,$name],$arguments);
    }
}
