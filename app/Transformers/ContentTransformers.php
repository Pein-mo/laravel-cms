<?php


namespace App\Transformers;


use League\Fractal\TransformerAbstract;
use Modules\Article\Entities\Content;

class ContentTransformers extends TransformerAbstract
{
    public function transform(Content $content)
    {
        return [
            'id' => $content['id'],
            'title' => $content['title']
        ];
    }
}
