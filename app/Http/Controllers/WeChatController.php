<?php

namespace App\Http\Controllers;

use Houdunwang\WeChat\Build\Message\Message;
use Houdunwang\WeChat\WeChat;
use Illuminate\Http\Request;
use Modules\Wx\Entities\WxConfig;

class WeChatController extends Controller
{

    public function __construct(WxConfig $wxConfig)
    {
        $this->valid();
    }

    protected function valid(WxConfig $wxConfig){
        $config =array_merge(include base_path('config').'/wechat.php',$wxConfig->pluck('value','name')->toArray());
        (new WeChat)->config($config);
        (new WeChat)->valid();
    }
    public function handler(){
        //消息管理模块
        $instance = new Message;
        //判断是否是文本消息
        if ($instance->isTextMsg())
        {
            //向用户回复消息
            return $instance->text('后盾人收到你的消息了...:' . $instance->Content);
        }

    }
}
