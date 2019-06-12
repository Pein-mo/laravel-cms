<?php


namespace App\Transformers;


use League\Fractal\TransformerAbstract;
use Modules\Article\Entities\Slide;

class SlideTransformer extends TransformerAbstract
{
    public function transform(Slide $slide){
        return [
            'id'=>$slide['id'],
            'title'=>$slide['title'],
            'pic'=>$slide['pic']
        ];
    }
}
