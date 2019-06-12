<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Article\Entities\Content;

class ContentController extends Controller
{
    //
    public function index(){
        return $this->response->array(Content::get());
    }
}
