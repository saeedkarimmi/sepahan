<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'user_id', 'img_url','template','description_short'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
