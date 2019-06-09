<?php


namespace Modules\Base;


use Houdunwang\WeChat\Build\Message\Message;

class Response
{
    public function handle($rule){
        $instance = new Message();
        return $instance->text('你好,我在这里'.$rule['id']);
    }
}
