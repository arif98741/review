<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Package;
use App\Models\Company;
use App\Models\Reviewer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

          factory(Category::class, 8)->create();
          factory(Package::class, 8)->create();
          factory(Company::class, 8)->create();
          factory(Reviewer::class, 8)->create();
    }
}
