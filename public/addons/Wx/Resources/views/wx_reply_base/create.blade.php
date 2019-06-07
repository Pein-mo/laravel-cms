@extends('admin::layouts.master')
@section('content')
    {!! $ruleView !!}
    <div class="card" id="app">
        <div class="card-header">基本回复管理</div>
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a href="/wx/wx_reply_base" class="nav-link">基本回复列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">添加基本回复</a></li>
        </ul>
        <form action="/wx/wx_reply_base" method="post">
            <div class="card-body card-body-contrast">
                @csrf
                <div class="form-group row">
    <label for="content" class="col-12 col-sm-3 col-form-label text-md-right">回复内容</label>
    <div class="col-12 col-md-9">
        <textarea id="content" name="content" rows="3"
                  class="form-control form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">
            {{ $wx_reply_base['content']??old('content') }}</textarea>
        @if ($errors->has('content'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('content') }}</strong>
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
