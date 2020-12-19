<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Storage;

class DelcertificateController extends Controller
{
    public function destroy($id)
    {
        $find = Product::findOrFail($id);
        if (Storage::exists('app/public/' . $find->certificate_pdf_url)) {
            Storage::delete('app/public/' . $find->certificate_pdf_url);
        }

        $find->update(['certificate_pdf_url' => null]);
        return redirect()->back();
    }
}
