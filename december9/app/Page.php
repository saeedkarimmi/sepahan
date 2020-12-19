<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class page extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'slug', 'description', 'author_id', 'media_id','template'
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
