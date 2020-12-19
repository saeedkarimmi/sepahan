<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['title','category_id'];

    //todo change relationship
    public function parentCategory()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }

    public function subCategory()
    {
        return $this->hasMany(Category::class , 'category_id');
    }

    public function getParentAttribute()
    {
        return (is_null($this->parentCategory)) ? 'ندارد'  : $this->parentCategory->title;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
