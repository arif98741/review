<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];

    public function company()
    {
        return $this->hasMany(Company::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function review()
    {
        return $this->belongsTo(Review::class, 'category_id', 'review_id');
    }
}