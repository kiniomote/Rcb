<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'name' =>  'Понедельник'
        ]);
        DB::table('days')->insert([
            'name' =>  'Вторник'
        ]);
        DB::table('days')->insert([
            'name' =>  'Среда'
        ]);
        DB::table('days')->insert([
            'name' =>  'Четверг'
        ]);
        DB::table('days')->insert([
            'name' =>  'Пятница'
        ]);
        DB::table('days')->insert([
            'name' =>  'Суббота'
        ]);
        DB::table('days')->insert([
            'name' =>  'Воскресенье'
        ]);
    }
}
