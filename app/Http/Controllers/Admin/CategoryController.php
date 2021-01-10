<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
//
//        $categories = Category::whereNull('category_id')
//            ->with('childrenCategories')
//            ->orderby('title', 'asc')
//            ->get();

        return view('admin.pages.category.index',compact('categories') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('admin.pages.category.create' , compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => ["required", Rule::unique('categories', 'title')->where(function ($query) use ($request) {
                if ($request->has('category_id')) {
                    return $query->where('category_id', $request->get('category_id'));
                }
            })],
            'category_id' => ['nullable','exists:categories,category_id']
        ]);
        Category::create([
            'title'=>$request->title,
            'category_id'=>$request->category_id

        ]);
        return redirect(route('admin.category.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('id','!=',$id)->get();
        return view('admin.pages.category.edit',compact('category' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => ["required", Rule::unique('categories', 'title')->where(function ($query) use ($request, $id) {
                if ($request->has('category_id')) {
                    return $query->where('category_id', $request->get('category_id'))->where('id', '!=' , $id);
                }
            })],
            'category_id' => ['nullable','exists:categories,category_id']
        ]);
        $category = Category::findOrFail($id);
        $category->update([
            'title'=>$request->title,
            'category_id'=>$request->category_id
        ]);
        return redirect(route('admin.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
         $category->delete();
        return redirect(route('admin.category.index'));
    }
}
