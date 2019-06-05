@extends('admin::layouts.master')
@section('head')
    <link rel="stylesheet" href="{{asset('addons/Wx/Resources/views/menu/index.css')}}">
@endsection
@section('content')
    <div class="card" id="app">
        <div class="card-header">微信菜单管理</div>

        <form action="/wx/wx_menu" method="post">
            <div class="card-body card-body-contrast">
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mobile">
                            <div class="menu-container">
                                <div class="menu">
                                    <h5>新闻</h5>
                                    <dl>
                                        <dd>汽车</dd>
                                        <dd>游戏</dd>
                                    </dl>
                                </div>
                                <div class="menu">
                                    <h5>新闻</h5>
                                    <dl>
                                        <dd>汽车</dd>
                                        <dd>游戏</dd>
                                    </dl>
                                </div>
                                <div class="menu">
                                    <h5>新闻</h5>
                                    <dl>
                                        <dd>汽车</dd>
                                        <dd>游戏</dd>
                                    </dl>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">1111</div>
                </div>

            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary offset-sm-2">保存提交</button>
            </div>
        </form>
    </div>
@endsection
