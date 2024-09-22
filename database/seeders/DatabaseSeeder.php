<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([PublishersSeeder::class]);
      $this->call([BooksSeeder::class]);
      $this->call([CategoriesSeeder::class]);
      $this->call([BookCategoriesSeeder::class]);
    }
}
