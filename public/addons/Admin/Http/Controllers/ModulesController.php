<?php
namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Modules;
use Modules\Admin\Http\Requests\ModulesRequest;
use Modules\Admin\Services\ModuleService;

class ModulesController extends Controller
{
    //显示列表
    public function index()
    {
        $data = Modules::paginate(10);
        return view('admin::modules.index', compact('data'));
    }

    //创建视图
    public function create(Modules $modules)
    {
        return view('admin::modules.create',compact('modules'));
    }

    //保存数据
    public function store(ModulesRequest $request,Modules $modules)
    {
        $modules->fill($request->all());
        $modules->save();

        return redirect('/admin/modules')->with('success', '保存成功');
    }

    //显示记录
    public function show(Modules $field)
    {
        return view('admin::modules.show', compact('field'));
    }

    //编辑视图
    public function edit(Modules $modules)
    {
        return view('admin::modules.edit', compact('modules'));
    }

    //更新数据
    public function update(ModulesRequest $request, Modules $modules)
    {
        $modules->update($request->all());
        return redirect('/admin/modules')->with('success','更新成功');
    }

    //删除模型
    public function destroy(Modules $modules)
    {
        $modules->delete();
        return redirect('admin/modules')->with('success','删除成功');
    }

    //更新模块缓存
    public function updateCache(ModuleService $moduleService){
        $moduleService->updateCache();
        return back()->with('success','模块缓存更新成功');
    }

    //设置默认模块
    public function setDefault(Modules $modules){

        $modules->setDefault();
        return back()->with('success','设置成功');
    }

}
