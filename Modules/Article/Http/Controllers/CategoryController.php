<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Article\Entities\Category;
use Modules\Article\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Category $category)
    {
        dd(1);
        $catetories = $category->getAll();

//        dd($catetories);
        return view('article::category.index',compact('catetories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Category $category)
    {

        $catetories = $category->getAll();
        return view('article::category.create',compact('catetories','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CategoryRequest $categoryRequest,Category $category)
    {
        $category->fill($categoryRequest->all());
        $category->save();
        return redirect('/article/category')->with('success', '栏目添加成功');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('article::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Category $category)
    {

        $catetories = $category->getAll($category);
//        dump($catetories);
        return view('article::category.edit',compact('catetories','category'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(CategoryRequest $categoryRequest,Category $category)
    {
        $category->update($categoryRequest->all());
        return redirect('/article/category')->with('success', '栏目修改成功');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Category $category)
    {
        if($category->hasChildCategory()){
            return back()->with('danger','请先删除子栏目');

        }
        $category->delete();
        session()->flash('success','删除栏目成功');
        return back();
    }
}
