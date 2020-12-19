<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if(!isset($request->q))
        {
            return redirect('/');
        }
        if(strlen($request->q) <= 191)
        {
            Search::create([
                'title' => $request->q
            ]);
        }
        $terms=explode(' ',$request->q);
        $product=Product::where(function ($q) use ($terms){
            foreach ($terms as $term)
            {
                return $q->where('title','LIKE','%'.$term.'%');
            }
        })->orderByDesc('id')->paginate(36);


        $post=Post::where(function ($q) use ($terms){
            foreach ($terms as $term)
            {
                return $q->where('title','LIKE','%'.$term.'%');
            }
        })->orderByDesc('id')->paginate(36);

        return view('admin.search',compact('product','post'));

    }
}
