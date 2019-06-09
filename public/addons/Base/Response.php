<?php


namespace Modules\Base;


use Houdunwang\WeChat\Build\Message\Message;
use Modules\Base\Entities\Base;

class Response
{
    public function handle($rule){
        $base = Base::firstOrNew(['rule_id'=>$rule['id']]);
        $instance = new Message();
        return $instance->text($base->content);
    }
}
