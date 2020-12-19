<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Auth;

class PageController extends Controller
{
    public function getPages(){
        $data = [
            'pages'=> Page::all(),
            'title'=>'All Pages'
        ];
        return view('dashboard.pages.list', $data);
    }

    public function getCreatePage(){
        $data = [
            'title'=>'Add Page',
        ];
        return view('dashboard.pages.add', $data);
    }

    public function createPage(Request $request){
        $validator = $request->validate([
            'title' => 'required|min:3',
            'slug' => 'required|min:3|max:255|unique:pages',
        ]);

        $currentUser = Auth::user();

        $currentPage = Page::create([
            'title' => $request->title,
            'slug' => SlugService::createSlug(Page::class, 'slug', $request->slug),
            'description' => $request->description,
            'author_id' => $currentUser->id,
            'template' => $request->template?$request->template:'default'
        ]);

        return \Redirect::route('page-edit', $currentPage->id)->with('message', 'Page created successfully.');
    }

    public function editPage($id){
        $data = [
            'title'=>'Edit Page',
            'currentPage'=> Page::findOrFail($id)
        ];
        return view('dashboard.pages.edit', $data);
    }

    public function updatePage($id, Request $request){
        $currentPage = Page::findOrFail($id);
        $validator = $request->validate([
            'title' => 'required|min:3',
            'slug' => 'required|min:3|max:255|unique:pages,slug,'. $currentPage->id,
        ]);
        
        $currentPage->update([
            'slug' => null
        ]);
        $currentPage->update([
            'title' => $request->title,
            'slug' => SlugService::createSlug(Page::class, 'slug', $request->slug),
            'description' => $request->description,
            'template' => $request->template?$request->template:'default'
        ]);

        return \Redirect::route('page-edit', $currentPage->id)->with('message', 'Page updated successfully.');
    }

    public function deletePage($id){
        $data = [
            'pages'=> Page::all(),
            'title'=>'Delete Page',
            'action'=>'delete',
            'currentPage'=> Page::findOrFail($id)
        ];
        return view('dashboard.pages.delete', $data);
    }

    public function removePage($id, Request $request){
        $currentPage = Page::findOrFail($id);
        $currentPage->delete();
        
        $data = [
            'pages'=> Page::all(),
            'title'=>'Add Page',
            'message'=>'Page deleted successfully.'
        ];
        return view('dashboard.pages.list', $data);
    }
}
