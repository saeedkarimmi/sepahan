<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::get();


        return view('admin.pages.product.index',['products'=>$products] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'datashid_pdf_url'=>'required',
            'code_product'=>'required',
            'tip_product'=>'required',
            'virtual'=>'required',
            'brand_id'=>'required',
            'category_id'=>'required',
            'country_id'=>'required',
        ]);
        $file1 = null;
        $file2 = null;
        $file3 = null;
        if($request->file('certificate_pdf_url') != null){
            $file1 ="storage/app/public/". $request->file('certificate_pdf_url')->store('file');
        }
        if($request->file('manual_pdf_url') != null){
            $file3 ="storage/app/public/". $request->file('manual_pdf_url')->store('file');
        }
        $path ="storage/app/public/". $request->file('datashid_pdf_url')->store('file');

        $product = Product::create([
            'user_id'=> Auth::user()->id,
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'description_short'=>$request->input('description_short'),
            'tip_product'=>$request->input('tip_product'),
            'code_product'=>$request->input('code_product'),
            'virtual_code'=>$request->input('virtual'),
            'virtual_code_m'=>$request->input('virtual_code_m'),
            'virtual_code_m1'=>$request->input('virtual_code_m1'),
            'virtual_code_m2'=>$request->input('virtual_code_m2'),
            'virtual_code_m3'=>$request->input('virtual_code_m3'),
            'virtual_code_m4'=>$request->input('virtual_code_m4'),
            'show_in_homepage'=>$request->input('show_in_homepage') == 'on' ? 1 : 0,
            'certificate_pdf_url'=>$file1,
            'datashid_pdf_url'=>$path,
            'manual_pdf_url'=>$file3,
            'brand_id'=>$request->input('brand_id'),
            'category_id'=>$request->input('category_id'),
            'country_id'=>$request->input('country_id')


        ]);


        foreach ($request->images as $image) {

        $file_name = $image->getClientOriginalName();
         $file = "public/storage/". $image->store('images');
         $name = explode('/',$file);
         //dd($name);
            ProductImages::create([
                'img_url'=>'/images/' . $name[3],
                'product_id' => $product->id
            ]);
            }



        return redirect(route('admin.product.index'));
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
        $product = Product::where('id','=',$id)->with('image')->get()->first();

        return view('admin.pages.product.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     
    public function update(Request $request, Product $product)
    {
        try {
            $product->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'description_short' => $request->input('description_short'),
                'tip_product' => $request->input('tip_product'),
                'code_product' => $request->input('code_product'),
                'virtual_code' => $request->input('virtual'),
                'virtual_code_m' => $request->input('virtual_code_m'),
                'virtual_code_m1' => $request->input('virtual_code_m1'),
                'virtual_code_m2' => $request->input('virtual_code_m2'),
                'virtual_code_m3' => $request->input('virtual_code_m3'),
                'virtual_code_m4' => $request->input('virtual_code_m4'),
                'brand_id' => $request->input('brand_id'),
                'category_id' => $request->input('category_id'),
                'country_id' => $request->input('country_id'),
                'show_in_homepage' => $request->input('show_in_homepage') == 'on' ? 1 : 0,
            ]);


            if($request->file('certificate_pdf_url') != ''){
                if (Storage::exists('app/public/' . $product->certificate_pdf_url)) {
                    Storage::delete('app/public/' . $product->certificate_pdf_url);
                }
                $file1 =("storage/app/public/". $request->file('certificate_pdf_url')->store('file'));
                $product->update(['certificate_pdf_url' => $file1]);

            }

            if($request->file('manual_pdf_url') != ''){
                if (Storage::exists('app/public/' . $product->manual_pdf_url)) {
                    Storage::delete('app/public/' . $product->manual_pdf_url);
                }
                $file3 =("storage/app/public/". $request->file('manual_pdf_url')->store('file'));
                $product->update(['manual_pdf_url' => $file3]);

            }


            if($request->file('datashid_pdf_url') != ''){
                if (Storage::exists('app/public/' . $product->datashid_pdf_url)) {
                    Storage::delete('app/public/' . $product->datashid_pdf_url);
                }
                $path =("storage/app/public/". $request->file('datashid_pdf_url')->store('file'));
                $product->update(['datashid_pdf_url' => $path]);

            }




            if(is_array($request->images)) {

                foreach ($request->images as $image) {

                    $file_name = $image->getClientOriginalName();
                    $file = "public/storage/" . $image->store('images');
                    $name = explode('/', $file);
                    //dd($name);
                    ProductImages::create([
                        'img_url' => '/images/' . $name[3],
                        'product_id' => $product->id
                    ]);
                }
            }
            
            return redirect(route('admin.product.index'));
        } catch (\Exception $exception) {
            dd($exception->getMessage(), $exception->getTraceAsString());
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        foreach ($product->image as $image)
        {
//            echo Storage::url('app/public/' . $image->img_url);die();
            if (Storage::exists('app/public/' . $image->img_url)) {
                Storage::delete('app/public/' . $image->img_url);
            }
            $image->delete();
        }

        if (Storage::exists('app/public/' . $product->certificate_pdf_url)) {
            Storage::delete('app/public/' . $product->certificate_pdf_url);
        }


        if (Storage::exists('app/public/' . $product->datashid_pdf_url)) {
            Storage::delete('app/public/' . $product->datashid_pdf_url);
        }

        if (Storage::exists('app/public/' . $product->manual_pdf_url)) {
            Storage::delete('app/public/' . $product->manual_pdf_url);
        }
        $product->delete();

        return redirect(route('admin.product.index'));
    }
}
