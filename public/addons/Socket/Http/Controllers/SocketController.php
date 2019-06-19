<?php

namespace Modules\Socket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SocketController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
//        dd(auth()->user()->id);
        $uid = auth()->user()->id;
//        dd($uid);
        return view('socket::index',compact('uid'));
    }


}
