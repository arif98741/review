<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BlogPost;


class BlogPost extends Model
{
    protected $guarded = [];

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function tag()
    {
        return $this->hasMany(BlogTag::class);
    }
}
