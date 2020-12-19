<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'description_short', 'tip_product', 'code_product','certificate_pdf_url','datashid_pdf_url','manual_pdf_url','brand_id','virtual_code','virtual_code_m','virtual_code_m1','virtual_code_m2','virtual_code_m3','virtual_code_m4','category_id','user_id','country_id','show_in_homepage'
    ];
    
    
    public function image(){
        return $this->hasMany('App\ProductImages','product_id');
    }
}
