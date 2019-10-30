<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\Category;
use App\Models\Company;
use App\Models\Package;
use App\Models\Reviewer;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {

          factory(Admin::class, 1)->create();
          factory(Category::class, 8)->create();
          //factory(Package::class, 8)->create();
          //factory(Company::class, 8)->create();
          //factory(Reviewer::class, 8)->create();
          factory(BlogCategory::class, 8)->create();
          factory(BlogPost::class, 8)->create();
          factory(BlogTag::class, 8)->create();
    }
}
