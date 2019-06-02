<?php
namespace Modules\Wx\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Wx\Entities\WxConfig;
use Modules\Wx\Http\Requests\WxConfigRequest;
class WxConfigController extends Controller
{
    //显示列表
    public function index()
    {
        $data = WxConfig::paginate(10);
        return view('wx::wx_config.index', compact('data'));
    }

    //创建视图
    public function create(WxConfig $wx_config)
    {
        return view('wx::wx_config.create',compact('wx_config'));
    }

    //保存数据
    public function store(WxConfigRequest $request,WxConfig $wx_config)
    {
        $wx_config->fill($request->all());
        $wx_config->save();

        return redirect('/wx/wx_config')->with('success', '保存成功');
    }

    //显示记录
    public function show(WxConfig $field)
    {
        return view('wx::wx_config.show', compact('field'));
    }

    //编辑视图
    public function edit(WxConfig $wx_config)
    {
        return view('wx::wx_config.edit', compact('wx_config'));
    }

    //更新数据
    public function update(WxConfigRequest $request, WxConfig $wx_config)
    {
        $wx_config->update($request->all());
        return redirect('/wx/wx_config')->with('success','更新成功');
    }

    //删除模型
    public function destroy(WxConfig $wx_config)
    {
        $wx_config->delete();
        return redirect('wx/wx_config')->with('success','删除成功');
    }
}
