<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use \Cviebrock\EloquentSluggable\Services\SlugService;

use Auth;

class BrandController extends Controller
{

    public function getBrands(){
        $data = [
            'brands'=> brand::all(),
            'title'=>'All Brands'
        ];
        return view('dashboard.brands.list', $data);
    }

    public function getCreateBrand(){
        $data = [
            'title'=>'Add Brand',
        ];
        return view('dashboard.brands.add', $data);
    }

    public function createBrand(Request $request){
        $validator = $request->validate([
            'title' => 'required|min:3',
            'slug' => 'required|min:3|max:255|unique:brands',
            'country' => 'required|min:3',
        ]);

        $currentUser = Auth::user();

        $currentBrand = Brand::create([
            'title' => $request->title,
            'country' => $request->country,
            'slug' => SlugService::createSlug(Brand::class, 'slug', $request->slug),
            'slug' => $request->slug,
            'description' => $request->description,
            'user_id' => $currentUser->id

        ]);

        return \Redirect::route('brand-edit', $currentBrand->id)->with('message', 'Brand created successfully.');
    }

    public function editBrand($id){
        $data = [
            'title'=>'Edit Brand',
            'currentBrand'=> Brand::findOrFail($id)
        ];
        return view('dashboard.brands.edit', $data);
    }

    public function updateBrand($id, Request $request){
        $currentBrand = Brand::findOrFail($id);
        $validator = $request->validate([
            'title' => 'required|min:3',
            'country' => 'required|min:3',
            'slug' => 'required|min:3|max:255|unique:brands,slug,'. $currentBrand->id,
        ]);

        $currentBrand->update([
            'slug' => null
        ]);
        $currentBrand->update([
            'title' => $request->title,
            'country' => $request->country,
            'slug' => SlugService::createSlug(Brand::class, 'slug', $request->slug),
            'description' => $request->description
        ]);

        return \Redirect::route('brand-edit', $currentBrand->id)->with('message', 'Brand updated successfully.');
    }

    public function deleteBrand($id){
        $data = [
            'brands'=> Brand::all(),
            'title'=>'Delete Brand',
            'action'=>'delete',
            'currentBrand'=> Brand::findOrFail($id)
        ];
        return view('dashboard.brands.delete', $data);
    }

    public function removeBrand($id, Request $request){
        $currentBrand = Brand::findOrFail($id);
        $currentBrand->delete();

        $data = [
            'brands'=> Brand::all(),
            'title'=>'Add Brand',
            'message'=>'Brand deleted successfully.'
        ];
        return view('dashboard.brands.list', $data);
    }
}
