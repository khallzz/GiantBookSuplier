<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Comedy'
        ]);

        DB::table('categories')->insert([
            'name' => 'Action'
        ]);

        DB::table('categories')->insert([
            'name' => 'Horror'
        ]);
    }
}
