<?php

namespace App\Http\Controllers\Api;

use App\Transformers\UserTransformer;
use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function users(){
        return $this->response->array(User::get());
    }

    public function show($id){
        return $this->response->item(User::find($id),new UserTransformer());
    }
}
