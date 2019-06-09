<?php

namespace App\Http\Controllers;

use Houdunwang\WeChat\Build\Message\Message;
use Houdunwang\WeChat\WeChat;
use Illuminate\Http\Request;
use Modules\Wx\Entities\WxConfig;
use Modules\Wx\Entities\WxKeyword;
use Modules\Wx\Services\WeChatServer;

class WeChatController extends Controller
{

    public function __construct()
    {
        $this->valid();
    }

    //配置验证
    protected function valid(){
        $config =array_merge(include base_path('config').'/wechat.php',WxConfig::pluck('value','name')->toArray());
        (new WeChat)->config($config);
        (new WeChat)->valid();
    }
//    文本回复
    public function handler(){
        //消息管理模块
        $instance = new Message;
        //判断是否是文本消息
        if ($instance->isTextMsg())
        {
            if ($rule = $this->getRole($instance->Content)){
                //向用户回复消息
                return $instance->text($rule->name);
            }else{
                return $instance->text('听不懂你说啥啊');
            }

        }

    }

    protected function getRole($key){
        return WxKeyword::firstOrNew(['key'=>$key])->rule;
    }
}
