@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">图文回复管理</div>
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a href="/news/news" class="nav-link">图文回复列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">添加图文回复</a></li>
        </ul>
        <form action="/news/news" method="post">
            <div class="card-body card-body-contrast">
                @csrf
                <div class="form-group row">
    <label for="data" class="col-12 col-sm-3 col-form-label text-md-right">图文内容</label>
    <div class="col-12 col-md-9">
        <textarea id="data" name="data" rows="3"
                  class="form-control form-control{{ $errors->has('data') ? ' is-invalid' : '' }}">
            {{ $news['data']??old('data') }}</textarea>
        @if ($errors->has('data'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('data') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="rule_id" class="col-12 col-sm-3 col-form-label text-md-right">规则编号</label>
    <div class="col-12 col-md-9">
        <input id="rule_id" name="rule_id" type="text"
               value="{{ $news['rule_id']??old('rule_id') }}"
               class="form-control form-control-sm form-control{{ $errors->has('rule_id') ? ' is-invalid' : '' }}">
        @if ($errors->has('rule_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('rule_id') }}</strong>
            </span>
        @endif
    </div>
</div>

            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary offset-sm-2">保存提交</button>
            </div>
        </form>
    </div>
@endsection
