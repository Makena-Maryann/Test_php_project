<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    protected $fillable = [
        'title', 'body', 'slug'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
