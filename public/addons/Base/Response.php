<?php


namespace Modules\Base;


use Houdunwang\WeChat\Build\Message\Message;
use Modules\Base\Entities\Base;

class Response
{
    public function handle($rule){
        $instance = new Message();
        $base = Base::firstOrNew(['rule_id'=>$rule['id']]);
        $contents = json_decode($base->content,true);
        return $instance->text(array_random($contents)['content']);
    }
}
