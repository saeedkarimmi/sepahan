<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Country;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::get();


        return view('admin.pages.brand.index',['brands'=>$brands] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.brand.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $path ="storage/". $request->file('file')->store('file');
        $user_id = Auth::user()->id;
        Brand::create([
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'logo_url'=>$path,
            'country_id'=> $request->input('country_id'),
            'user_id'=>$user_id

        ]);
        return redirect(route('admin.brand.index'));
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
        $brand = Brand::where('id','=',$id)->get()->first();
        return view('admin.pages.brand.edit',['brand'=>$brand]);
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
        $brand = Brand::where('id','=',$id)->get()->first();
        $brand->title = $request->input('title');
        $brand->slug = $request->input('slug');
        $brand->save();
        return redirect(route('admin.brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::where('id','=',$id)->get()->first()->delete();

        return redirect(route('admin.brand.index'));
    }
}
