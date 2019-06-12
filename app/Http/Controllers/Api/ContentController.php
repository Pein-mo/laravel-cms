<?php

namespace App\Http\Controllers\Api;

use App\Transformers\ContentTransformers;
use Illuminate\Http\Request;
use Modules\Article\Entities\Content;

class ContentController extends Controller
{
    //


    public function index(){
        return $this->response->collection(Content::get(),new ContentTransformers());
    }

    public function show($id){
        return $this->response->item(Content::find($id),new ContentTransformers());
    }

}
