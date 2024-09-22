<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'Particular Books',
            'adress' => 'Jl. Citra Buku No.11',
            'phone' => '08129292828',
            'email' => 'particular@buku.com',
            'image' => 'Publisher1.jpg'
        ]);

        DB::table('publishers')->insert([
            'name' => 'BukuIndah',
            'adress' => 'Jl. Bukit Buku No.21',
            'phone' => '081112223334',
            'email' => 'BukuIndah@indah.com',
            'image' => 'Publisher2.jpg'
        ]);

        DB::table('publishers')->insert([
            'name' => 'Scribner',
            'adress' => 'Jl. Alat 12 No.13',
            'phone' => '02172999644',
            'email' => 'Scribner@book.com',
            'image' => 'Publisher3.jpg'
        ]);
    }
}
