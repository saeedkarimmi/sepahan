<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryfrontController extends Controller
{
    public function index($id)
    {
        $product=Product::where('category_id',$id)->get();
        return view('front.productcategory', compact('product'));
    }
}
