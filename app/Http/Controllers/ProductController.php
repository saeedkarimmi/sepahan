<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(4);
        return view('front.index', compact('products'));
    }
    
     public function show($id)
    {
//        $title = str_replace('-',' ',$id);
//        $query = Product::where('title',$title)->findOrFail();
      $product = Product::with('image')->findOrFail($id);

        return view('front.single_product' , compact('product'));
    }
}
