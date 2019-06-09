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
            return $this->respnse($instance->Content);
        }
        $instance = (new WeChat())->instance('button');
//        $instance = WeChat::instance('button');
        if($instance->isClickEvent()){
            $message = $instance->getMessage();
            return $this->respnse($message->EventKey);
        }

    }

    protected function respnse($key){

        $rule = WxKeyword::firstOrNew(['key'=>$key])->rule;
        if($rule){
            $class = 'Modules\\'.$rule['module'].'\Response';
            return call_user_func_array([new $class,'handle'],[$rule]);
        }

    }
}
