<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Brand extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'slug', 'user_id', 'logo_url','country_id',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }

    public function User(){
        return $this->belongsTo('App\User','user_id');
    }



}
