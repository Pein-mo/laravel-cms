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
                    <div class="col-sm-3">
                        <div class="news">

                        </div>
                    </div>
                    <div class="col-sm-9">

                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection
