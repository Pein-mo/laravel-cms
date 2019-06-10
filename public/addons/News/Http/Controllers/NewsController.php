<?php
namespace Modules\News\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\News\Entities\News;
use Modules\News\Http\Requests\NewsRequest;
class NewsController extends Controller
{
    //显示列表
    public function index()
    {
        $data = News::paginate(10);
        return view('news::news.index', compact('data'));
    }

    //创建视图
    public function create(News $news)
    {
        return view('news::news.create',compact('news'));
    }

    //保存数据
    public function store(NewsRequest $request,News $news)
    {
        $news->fill($request->all());
        $news->save();

        return redirect('/news/news')->with('success', '保存成功');
    }

    //显示记录
    public function show(News $field)
    {
        return view('news::news.show', compact('field'));
    }

    //编辑视图
    public function edit(News $news)
    {
        return view('news::news.edit', compact('news'));
    }

    //更新数据
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->all());
        return redirect('/news/news')->with('success','更新成功');
    }

    //删除模型
    public function destroy(News $news)
    {
        $news->delete();
        return redirect('news/news')->with('success','删除成功');
    }
}
