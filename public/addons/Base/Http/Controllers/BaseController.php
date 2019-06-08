<?php

namespace Modules\Base\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Base\Entities\Base;
use Modules\Base\Http\Requests\BaseRequest;
use Modules\Wx\Services\WeChatServer;

class BaseController extends Controller
{
    //显示列表
    public function index()
    {
        $data = Base::paginate(10);

        return view('base::base.index', compact('data'));
    }

    //创建视图
    public function create(Base $base, WeChatServer $weChatServer)
    {
        $ruleView = $weChatServer->ruleView();

        return view('base::base.create', compact('base', 'ruleView'));
    }

    //保存数据
    public function store(BaseRequest $request, Base $base, WeChatServer $weChatServer)
    {
        $data = $weChatServer->ruleSave();

        return redirect('/base/base')->with('success', '保存成功');
    }

    //显示记录
    public function show(Base $field)
    {
        return view('base::base.show', compact('field'));
    }

    //编辑视图
    public function edit(Base $base)
    {
        return view('base::base.edit', compact('base'));
    }

    //更新数据
    public function update(BaseRequest $request, Base $base)
    {
        $base->update($request->all());

        return redirect('/base/base')->with('success', '更新成功');
    }

    //删除模型
    public function destroy(Base $base)
    {
        $base->delete();

        return redirect('base/base')->with('success', '删除成功');
    }
}
