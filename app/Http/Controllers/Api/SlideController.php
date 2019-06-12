<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Article\Entities\Slide;

class SlideController extends Controller
{
    public function index(){
        $limit = \request()->query('limit',2);
        return $this->response->array(Slide::limit($limit)->get());
    }
}
