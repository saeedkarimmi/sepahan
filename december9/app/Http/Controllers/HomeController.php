<?php

namespace App\Http\Controllers;
use App\Post;


use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{




    public function index()
    {

        $posts= Post::latest()->paginate(4);
        return view('front.index', compact('posts'));



    }

//    public function product()
//    {
//       $products = Product::latest()->paginate(4);
//        return view('front.index', compact('products'));
//    }

}
