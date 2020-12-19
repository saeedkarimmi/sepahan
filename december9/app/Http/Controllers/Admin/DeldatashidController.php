<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeldatashidController extends Controller
{
    public function destroy($id)
    {
        $find = Product::findOrFail($id);
        if (Storage::exists('app/public/' . $find->datashid_pdf_url)) {
            Storage::delete('app/public/' . $find->datashid_pdf_url);
        }

        $find->update(['datashid_pdf_url' => null]);
        return redirect()->back();
    }
}
