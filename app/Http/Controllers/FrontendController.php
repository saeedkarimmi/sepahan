<?php

namespace App\Http\Controllers;

use App\Page;

class FrontendController extends Controller
{
    public function showPage($pageSlug){
        $page = Page::where('slug', '=', $pageSlug)->firstOrFail();
        return view('front.pages.' . $page->template, compact("page"));
    }
    public function showPost($postSlug){
        $post = Post::where('slug', '=', $postSlug)->firstOrFail();
        return view('front.posts.' . $post->template, compact("post"));
    }
    
    
}
