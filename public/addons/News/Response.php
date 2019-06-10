<?php


namespace Modules\News;


use Houdunwang\WeChat\Build\Message\Message;
use Modules\Base\Entities\Base;
use Modules\News\Entities\News;

class Response
{
    public function handle($rule){
        $instance = new Message();
        $news = News::firstOrNew(['rule_id'=>$rule['id']]);
        if($news){
            $contents = json_decode($news->data,true);
            return $instance->news($contents);
        }

    }
}
