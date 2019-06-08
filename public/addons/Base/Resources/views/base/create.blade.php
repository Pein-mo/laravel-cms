@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">基本回复管理</div>
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a href="/base/base" class="nav-link">基本回复列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">添加基本回复</a></li>
        </ul>
        <form action="/base/base" method="post">
            <div class="card-body card-body-contrast">
                @csrf
                
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary offset-sm-2">保存提交</button>
            </div>
        </form>
    </div>
@endsection
