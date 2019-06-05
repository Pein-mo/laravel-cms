<?php
namespace Modules\Wx\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Wx\Entities\WxMenu;
use Modules\Wx\Http\Requests\WxMenuRequest;
class WxMenuController extends Controller
{
    //显示列表
    public function index()
    {
        $data = WxMenu::paginate(10);
        return view('wx::wx_menu.index', compact('data'));
    }

    //创建视图
    public function create(WxMenu $wx_menu)
    {
        return view('wx::wx_menu.create',compact('wx_menu'));
    }

    //保存数据
    public function store(WxMenuRequest $request,WxMenu $wx_menu)
    {
        $wx_menu->fill($request->all());
        $wx_menu->save();

        return redirect('/wx/wx_menu')->with('success', '保存成功');
    }

    //显示记录
    public function show(WxMenu $field)
    {
        return view('wx::wx_menu.show', compact('field'));
    }

    //编辑视图
    public function edit(WxMenu $wx_menu)
    {
        return view('wx::wx_menu.edit', compact('wx_menu'));
    }

    //更新数据
    public function update(WxMenuRequest $request, WxMenu $wx_menu)
    {
        $wx_menu->update($request->all());
        return redirect('/wx/wx_menu')->with('success','更新成功');
    }

    //删除模型
    public function destroy(WxMenu $wx_menu)
    {
        $wx_menu->delete();
        return redirect('wx/wx_menu')->with('success','删除成功');
    }
}
