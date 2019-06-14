<?php

namespace App\Http\Controllers\Api;

use App\Transformers\ContentTransformers;
use Illuminate\Http\Request;
use Modules\Article\Entities\Content;

class ContentController extends Controller
{
    //


    public function index(){
        $limit = \request()->query('limit',10);
        if($cid = \request()->query('cid')){
            $contents = Content::where('category_id',$cid)->orderBy('id','desc')->paginate($limit);
        }else{
            $contents = Content::orderBy('id','desc')->paginate($limit);
        }

        return $this->response->paginator($contents,new ContentTransformers());
    }

    public function show($id){
        return $this->response->item(Content::find($id),new ContentTransformers());
    }

}
