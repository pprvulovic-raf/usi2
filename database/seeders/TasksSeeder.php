<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Projekti
        DB::table('tasks')->insert([
            'category_id'=>1,
            'zadatak'=>'flask projekat',
            'opis'=>'Treba napraviti flask aplikaciju',
            'trajanje'=>150,
            'zavrseno'=>true
        ]);
        DB::table('tasks')->insert([
            'category_id'=>1,
            'zadatak'=>'laravel projekat',
            'opis'=>'Treba napraviti laravel aplikaciju',
            'trajanje'=>275,
            'zavrseno'=>false
        ]);
        //Domaci
        DB::table('tasks')->insert([
            'category_id'=>2,
            'zadatak'=>'USI vezba git',
            'opis'=>'Napraviti repozitorijum i isprobati branch',
            'trajanje'=>15,
            'zavrseno'=>false
        ]);
        DB::table('tasks')->insert([
            'category_id'=>2,
            'zadatak'=>'USI vezba testiranje',
            'opis'=>'Napisati testove za postojecu laravel aplikaciju',
            'trajanje'=>25,
            'zavrseno'=>true
        ]);
        DB::table('tasks')->insert([
            'category_id'=>2,
            'zadatak'=>'USI vezba docker',
            'opis'=>'Napraviti primer koji pokrece sve ovo u dockeru, nekad',
            'trajanje'=>30,
            'zavrseno'=>false
        ]);
    }
}
