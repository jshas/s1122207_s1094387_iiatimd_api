<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('medicines')->insert([
            'name' => 'Ibuprofen',
            'amount' => '200',
            'unit_name' => 'mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Ritalin',
            'amount' => '10',
            'unit_name' => 'mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Adderall',
            'amount' => '2.5',
            'unit_name' => 'mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Advil',
            'amount' => '1000',
            'unit_name' => 'mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Cough Syrup',
            'amount' => '200',
            'unit_name' => 'ml',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Vitamin D',
            'amount' => '5',
            'unit_name' => 'mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Melatonin',
            'amount' => '5',
            'unit_name' => 'mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Vitamine C',
            'amount' => '500',
            'unit_name' => 'mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Vyvanse',
            'amount' => '20',
            'unit_name' => 'mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Prozac',
            'amount' => '10',
            'unit_name' => 'mg',
        ]);
        

    
    }
}
