<?php

namespace App\Http\Controllers;

use App\Http\Middleware\MailCheckMiddleware;
use App\Notifications\RegisterMailNotify;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkMailShow(){
        return view('user.check_mail_show');
    }

//    发送验证码
    public function sendMailToken(){
        $user = auth()->user();
        $user->notify(new RegisterMailNotify($user));
        return back()->with('success','邮件验证码已发送到您的邮箱'.$user->email);
    }

    public function checkUserMail($token){
        $user = \App\User::where('mail_token',$token)->first();
        if($user){
            $user['mail_status']=true;
            $sta = $user->save();
            if($sta){
                return redirect('/')->with('success','邮箱验证成功');
            }else{
                return redirect('/')->with('danger','你的邮箱已验证 请勿重复验证');
            }


        }
        return redirect('/')->with('danger','邮箱不存在');
    }
}
