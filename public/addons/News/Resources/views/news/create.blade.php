@extends('admin::layouts.master')
@section('head')
    <link rel="stylesheet" href="{{asset('addons/News/Resources/views/news/less/news.css')}}">
@endsection
@section('content')
    <ul role="tablist" class="nav nav-tabs">
        <li class="nav-item"><a href="/news/news" class="nav-link">图文回复列表</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">添加图文回复</a></li>
    </ul>
    <form action="/news/news" method="post">
        <div class="card" id="app">
            <div class="card-header">图文回复管理</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="news">
                            <div class="first" v-if="i==0">

                                <img src="http://img0.imgtn.bdimg.com/it/u=3692441613,3435428941&fm=26&gp=0.jpg" alt="">
                                <p>测试1</p>
                                <div class="edit">
                                    <button class="btn btn-secondary" type="button">编辑</button>
                                    <button class="btn btn-secondary" type="button">删除</button>
                                    <button class="btn btn-secondary" type="button">上移</button>
                                    <button class="btn btn-secondary" type="button">下移</button>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://img2.imgtn.bdimg.com/it/u=2033838781,461625559&fm=26&gp=0.jpg" alt="">
                                <p>测试2</p>
                                <div class="edit">
                                    <button class="btn btn-secondary" type="button">编辑</button>
                                    <button class="btn btn-secondary" type="button">删除</button>
                                    <button class="btn btn-secondary" type="button">上移</button>
                                    <button class="btn btn-secondary" type="button">下移</button>
                                </div>
                            </div>
                            <div class="pt-2">
                                <button class="btn btn-secondary btn-block" type="button" @click="add">添加图文</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">

                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection
@section('scripts')
    <script>
        {{--require(['{{asset('addons/News/Resources/views/news/js/news.js')}}'],function (news) {--}}
        {{--    news([])--}}
        {{--});--}}
        require(['{{asset('addons/News/Resources/views/news/js/news.js')}}'], function (news1) {
            news1([{title: '后盾人', 'discription': 'houdunren.com', 'picurl': '/plugin/hdjs/image/nopic.jpg', 'url': 'http://www.houdunwang.com'}])
        })
    </script>
@endsection
