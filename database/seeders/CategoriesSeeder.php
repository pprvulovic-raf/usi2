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
            'id'=>1,
            'kategorija'=>'Projekti'
        ]);
        DB::table('categories')->insert([
            'id'=>2,
            'kategorija'=>'Domaci'
        ]);
        DB::table('categories')->insert([
            'id'=>3,
            'kategorija'=>'Prezentacije'
        ]);
    }
}
