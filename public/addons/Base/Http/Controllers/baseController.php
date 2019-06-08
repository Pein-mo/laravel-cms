<?php
namespace Modules\base\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\base\Entities\base;
use Modules\base\Http\Requests\baseRequest;
use Modules\Wx\Services\WeChatServer;

class baseController extends Controller
{
    //显示列表
    public function index()
    {
        $data = base::paginate(10);
        return view('base::base.index', compact('data'));
    }

    //创建视图
    public function create(base $base,WeChatServer $weChatServer)
    {
        $ruleView = $weChatServer->ruleView();
        return view('base::base.create',compact('base','ruleView'));
    }

    //保存数据
    public function store(baseRequest $request,base $base)
    {
        $base->fill($request->all());
        $base->save();

        return redirect('/base/base')->with('success', '保存成功');
    }

    //显示记录
    public function show(base $field)
    {
        return view('base::base.show', compact('field'));
    }

    //编辑视图
    public function edit(base $base)
    {
        return view('base::base.edit', compact('base'));
    }

    //更新数据
    public function update(baseRequest $request, base $base)
    {
        $base->update($request->all());
        return redirect('/base/base')->with('success','更新成功');
    }

    //删除模型
    public function destroy(base $base)
    {
        $base->delete();
        return redirect('base/base')->with('success','删除成功');
    }
}
