<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searches = Search::get();


        return view('admin.pages.search.index',['searches'=>$searches] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        if(!isset($request->q))
//        {
//            return redirect('/');
//        }
//        if(strlen($request->q) <= 191)
//        {
//            SearchSave::create([
//                'user_id' => Auth::check() ? Auth::user()->id : 0,
//                'title' => $request->q
//            ]);
//        }
//        $terms=explode(' ',$request->q);
//        $product=Product::active()->where(function ($q) use ($terms){
//            foreach ($terms as $term)
//            {
//                return $q->where('title','LIKE','%'.$term.'%');
//            }
//        })->orderByDesc('id')->paginate(36);
//
//        return view('admin.search',compact('product''));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $search = Search::where('id','=',$id)->get()->first()->delete();

        return redirect(route('admin.search.index'));
    }

}


