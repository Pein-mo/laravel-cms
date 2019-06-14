<?php


namespace App\Transformers;


use League\Fractal\TransformerAbstract;
use Modules\Article\Entities\Content;

class ContentTransformers extends TransformerAbstract
{

    # 定义可以include可使用的字段
    protected $availableIncludes = ['category'];

    public function transform(Content $content)
    {
        return [
            'id' => $content['id'],
            'title' => $content['title'],
            'pic' => $content['thumb'],
            'content'=>$content['content'],
        ];
    }

    public function includeCategory(Content $content)
    {
        return $this->item($content->category, new CategoryTransformer());
    }
}
