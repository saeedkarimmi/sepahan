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
        $data = $this->getData($request);

        return view('front.search.show', [
            'products' => $data['products'],
            'productsCount' => $data['productsCount'],
            'posts' => $data['posts'],
            'postsCount' => $data['postsCount']
        ]);

    }

    public function searchAjax()
    {
        dd(12312321);
    }

    private function getData(Request $request)
    {
        if (!$request->has('q')) {
            return redirect('/');
        }

        $q = $request->get('q');

        if (strlen($q) <= 191) {
            Search::create([
                'title' => $q
            ]);
        }

        $terms = explode(' ', $q);
        $productsObj = Product::query()->where(function ($q) use ($terms) {
            foreach ($terms as $term) {
                return $q->where('title', 'LIKE', '%' . $term . '%');
            }
        })->orderByDesc('id')/*->paginate(36)*/;

        $products = $productsObj->limit(10)->get();
        $productsCount = $productsObj->count();

        $postsObj = Post::query()->where(function ($q) use ($terms) {
            foreach ($terms as $term) {
                return $q->where('title', 'LIKE', '%' . $term . '%');
            }
        })->orderByDesc('id')/*->paginate(36)*/;

        $posts = $postsObj->limit(10)->get();
        $postsCount = $postsObj->count();

        return [
            'products' => $products,
            'productsCount' => $productsCount,
            'posts' => $posts,
            'postsCount' => $postsCount,
        ];
    }
}
