<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BlogCategory;

class BlogCategory extends Model
{
    protected $guarded = [];

    public function blog_posts()
    {
        return $this->hasMany(BlogCategory::class);
    }
}
