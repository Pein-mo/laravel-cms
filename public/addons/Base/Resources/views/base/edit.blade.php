@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">基本回复管理</div>
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a href="/base/base" class="nav-link">基本回复列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">修改基本回复</a></li>
        </ul>
        <form action="/base/base/{{$base['id']}}" method="post">
            <div class="card-body card-body-contrast">
                @csrf @method('PUT')
                <div class="form-group row">
    <label for="content" class="col-12 col-sm-3 col-form-label text-md-right">回复内容</label>
    <div class="col-12 col-md-9">
        <textarea id="content" name="content" rows="3"
                  class="form-control form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">
            {{ $base['content']??old('content') }}</textarea>
        @if ($errors->has('content'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('content') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="rule_id" class="col-12 col-sm-3 col-form-label text-md-right">规则编号</label>
    <div class="col-12 col-md-9">
        <textarea id="rule_id" name="rule_id" rows="3"
                  class="form-control form-control{{ $errors->has('rule_id') ? ' is-invalid' : '' }}">
            {{ $base['rule_id']??old('rule_id') }}</textarea>
        @if ($errors->has('rule_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('rule_id') }}</strong>
            </span>
        @endif
    </div>
</div>

            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary offset-sm-2">保存更新</button>
            </div>
        </form>
    </div>
@endsection
