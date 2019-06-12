<?php


namespace App\Transformers;


use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user){
        return [
            'id'=>$user['id'],
            'email'=>$user['email'],
            'name'=>$user['name'],
            'nickname'=>$user['nickname']
        ];
    }
}
