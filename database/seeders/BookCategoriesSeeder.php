<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookcategories')->insert([
            'bookId' => 1,
            'categoryId' => 1,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 1,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 2,
            'categoryId' => 1,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 2,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 3,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 4,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 5,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 6,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 7,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 8,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 9,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 9,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 10,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 10,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 11,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 12,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 13,
            'categoryId' => 1,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 14,
            'categoryId' => 1,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 15,
            'categoryId' => 1,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 16,
            'categoryId' => 1,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 17,
            'categoryId' => 1,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 18,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 19,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 19,
            'categoryId' => 2,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 20,
            'categoryId' => 3,
        ]);

        DB::table('bookcategories')->insert([
            'bookId' => 20,
            'categoryId' => 1,
        ]);


    }
}
