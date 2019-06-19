@extends('socket::layouts.app')
@section('heads')
    <link rel="stylesheet" href="{{asset('addons/Socket/Resources/views/newcj/css/themes.css')}}">
    <link rel="stylesheet" href="{{asset('addons/Socket/Resources/views/newcj/css/h5app.css')}}">
    <link rel="stylesheet" href="{{asset('addons/Socket/Resources/views/newcj/fonts/iconfont.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class='fui-page-group'>
            <div class='fui-page chatDetail-page'>
                <div class="chat-header flex">
                    <i class="icon icon-toleft t-48"></i>
                    <span class="shop-titlte t-30">商店</span>
                    <span class="shop-online t-26"></span>
                    <span class="into-shop">进店</span>
                </div>
                <div class="fui-content navbar" style="padding:1.2rem 0 1.35rem 0;">
                    <div class="chat-content">
                        <p style="display: none;text-align: center;padding-top: 0.5rem" id="more"><a>加载更多</a></p>
                        <p class="chat-time"><span class="time">2017-11-12</span></p>

                        <div class="chat-text section-left flex">
                            <span class="char-img"
                                  style="background-image: url(http://laravel.mo1120.com/uploads/2019-06-18/yLE71GgF.jpeg)"></span>
                            <span class="text"><i class="icon icon-sanjiao4 t-32"></i>你好</span>
                        </div>

                        <div class="chat-text section-right flex">
                            <span class="text"><i class="icon icon-sanjiao3 t-32"></i>你好</span>
                            <span class="char-img"
                                  style="background-image: url(http://laravel.mo1120.com/uploads/2019-06-18/UwfQhVDV.jpeg)"></span>
                        </div>

                    </div>
                </div>
                <div class="fix-send flex footer-bar">
                    <i class="icon icon-emoji1 t-50"></i>
                    <input class="send-input t-28" maxlength="200">
                    <i class="icon icon-add t-50" style="color: #888;"></i>
                    <span class="send-btn">发送</span>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script src="{{asset('addons/Socket/Resources/views/newcj/js/dist/flexible/flexible_css.debug.js')}}"></script>
    <script src="{{asset('addons/Socket/Resources/views/newcj/js/dist/flexible/flexible.debug.js')}}"></script>
    <script>
        var uid = {{$uid}};
        console.log(uid)
        var socket = new WebSocket('ws://47.92.25.181:2346');
        socket.onmessage = function (e) {
            console.log(e)
        }

        $(".send-btn").click(function () {
            var msg = $(".send-input").val();
            var message = {
                data:msg,
                type:'say',
            }

            if(socket.readyState ===1){
                socket.send(JSON.stringify(message));
            }
            $(".send-input").val('')
        })
    </script>
@endsection
