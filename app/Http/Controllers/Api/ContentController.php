<?php

namespace App\Http\Controllers\Api;

use App\Transformers\ContentTransformers;
use Illuminate\Http\Request;
use Modules\Article\Entities\Category;
use Modules\Article\Entities\Content;

class ContentController extends Controller
{
    //


    public function index(){
        return $this->response->collection(Content::get(),new ContentTransformers());
    }


}
