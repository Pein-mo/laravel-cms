<?php
namespace Modules\Wx\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Wx\Entities\WxReplyBase;
use Modules\Wx\Http\Requests\WxReplyBaseRequest;
use Modules\Wx\Services\WeChatServer;

class WxReplyBaseController extends Controller
{
    //显示列表
    public function index()
    {
        dd(\HDModule::getModulesLists());
        $data = WxReplyBase::paginate(10);
        return view('wx::wx_reply_base.index', compact('data'));
    }

    //创建视图
    public function create(WxReplyBase $wx_reply_base,WeChatServer $weChatServer)
    {
        $ruleView = $weChatServer->ruleView();
//        dd($ruleView);
        return view('wx::wx_reply_base.create',compact('wx_reply_base','ruleView'));
    }

    //保存数据
    public function store(WxReplyBaseRequest $request,WxReplyBase $wx_reply_base)
    {
        $wx_reply_base->fill($request->all());
        $wx_reply_base->save();

        return redirect('/wx/wx_reply_base')->with('success', '保存成功');
    }

    //显示记录
    public function show(WxReplyBase $field)
    {
        return view('wx::wx_reply_base.show', compact('field'));
    }

    //编辑视图
    public function edit(WxReplyBase $wx_reply_base)
    {
        return view('wx::wx_reply_base.edit', compact('wx_reply_base'));
    }

    //更新数据
    public function update(WxReplyBaseRequest $request, WxReplyBase $wx_reply_base)
    {
        $wx_reply_base->update($request->all());
        return redirect('/wx/wx_reply_base')->with('success','更新成功');
    }

    //删除模型
    public function destroy(WxReplyBase $wx_reply_base)
    {
        $wx_reply_base->delete();
        return redirect('wx/wx_reply_base')->with('success','删除成功');
    }
}
