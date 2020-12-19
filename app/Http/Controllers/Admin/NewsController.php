<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\DeclareDeclare;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();


        return view('admin.pages.news.index',['posts'=>$posts] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'description'=>'required',
            'description_short'=>'required',
            'img_url'=>'required',

        ]);


        $path ="storage/". $request->file('file')->store('file');
       \auth()->user()->posts()->create([
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
            'description_short'=>$request->input('description_short'),
            'img_url'=>$path,

        ]);
        return redirect(route('admin.news.index'));
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
        $post = Post::where('id','=',$id)->get()->first();
        return view('admin.pages.news.edit',['post'=>$post]);
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
        $post = Post::where('id','=',$id)->get()->first();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->description = $request->input('description');
        $post->description = $request->input('description_short');
        $post->save();
        return redirect(route('admin.news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id','=',$id)->get()->first()->delete();

        return redirect(route('admin.news.index'));
    }
}
