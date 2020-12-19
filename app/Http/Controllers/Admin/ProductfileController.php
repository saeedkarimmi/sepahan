<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductfileController extends Controller
{
    public function destroy($id)
    {
        $find=ProductImages::findOrFail($id);
        if(Storage::exists('app/public/'.$find->link))
        {
            Storage::delete('app/public/'.$find->link);
        }

        $find->delete();
        return redirect()->back();
    }

}
