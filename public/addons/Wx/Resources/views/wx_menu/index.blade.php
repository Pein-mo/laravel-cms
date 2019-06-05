@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">微信菜单管理</div>

        <form action="/wx/wx_menu" method="post">
            <div class="card-body card-body-contrast">
                @csrf
                <div class="form-group row">
                    <label for="data" class="col-12 col-sm-3 col-form-label text-md-right">标题</label>
                    <div class="col-12 col-md-9">
                        <input id="data" name="data" type="text"
                               value="{{ $wx_menu['data']??old('data') }}"
                               class="form-control form-control-sm form-control{{ $errors->has('data') ? ' is-invalid' : '' }}">
                        @if ($errors->has('data'))
                            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('data') }}</strong>
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
