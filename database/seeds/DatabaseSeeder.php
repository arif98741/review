<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Founder;
use App\Models\Package;
use App\Models\Reply;
use App\Models\Review;
use App\Models\Reviewer;
use App\Models\ReviewImage;
use App\Models\Setting;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
          factory(Admin::class, 1)->create();
          factory(Category::class, 8)->create();
          factory(Package::class, 8)->create();
          factory(Company::class, 5)->create();
          factory(Reviewer::class, 5)->create();
          //factory(BlogCategory::class, 8)->create();
          //factory(BlogPost::class, 8)->create();
          //factory(Comment::class, 10)->create();
          factory(BlogTag::class, 8)->create();
          //factory(Founder::class, 5)->create();
          factory(Review::class, 10)->create();
          factory(ReviewImage::class, 10)->create();
          factory(Reply::class, 20)->create();
          //factory(Setting::class, 1)->create();
    }
}
