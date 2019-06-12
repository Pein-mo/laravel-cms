<?php

namespace App\Http\Controllers\Api;

use App\Transformers\CategoryTransformer;
use Illuminate\Http\Request;
use Modules\Article\Entities\Category;


class CategoryController extends Controller
{
    public function index(){
        return $this->response->collection(Category::get(),new CategoryTransformer());
    }
}
