<?php

namespace Modules\Wx\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WxMenuRequest extends FormRequest
{
    //验证规则
    public function rules()
    {
        return [
            'name'=>'required',
            'data'=>'required'
        ];
    }

    //错误信息处理
    public function messages()
    {
        return [
            'name.required'=>'请输入菜单名称',
            'data.required'=>'设置菜单内容'
        ];
    }

    //权限验证
    public function authorize()
    {
        return true;
    }
}
