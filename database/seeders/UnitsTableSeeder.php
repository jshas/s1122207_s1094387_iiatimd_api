<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'name' => 'mg',
        ]);
        DB::table('units')->insert([
            'name' => 'ml',
        ]);
        DB::table('units')->insert([
            'name' => 'g',
        ]);
        DB::table('units')->insert([
            'name' => 'pill',
        ]);
    }
}
