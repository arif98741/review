<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\Category;
use App\Models\Company;
use App\Models\Founder;
use App\Models\Package;
use App\Models\Review;
use App\Models\Reviewer;
use App\Models\Setting;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
          factory(Admin::class, 1)->create();
          factory(Category::class, 8)->create();
          factory(Package::class, 8)->create();
          factory(Company::class, 3)->create();
          factory(Reviewer::class, 8)->create();
          factory(BlogCategory::class, 8)->create();
          factory(BlogPost::class, 8)->create();
          factory(BlogTag::class, 8)->create();
          factory(Founder::class, 8)->create();
          factory(Review::class, 10)->create();
          factory(Setting::class, 1)->create();
    }
}
