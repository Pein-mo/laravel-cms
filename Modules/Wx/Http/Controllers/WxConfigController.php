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



    //保存数据
    public function store(WxConfigRequest $request,WxConfig $wx_config)
    {
        dd(111);
        $wx_config->truncate();
        foreach ($request->all() as $name =>$value){
            $wx_config->insert(['name'=>$name,'value'=>$value]);
        }

        return redirect('/wx/wx_config')->with('success', '保存成功');
    }


}
