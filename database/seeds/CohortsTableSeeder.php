<?php

use Illuminate\Database\Seeder;

class CohortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cohorts')->insert([
            'name' => 'Spring 2016'
        ]);
        DB::table('cohorts')->insert([
            'name' => 'Fall 2015'
        ]);
        DB::table('cohorts')->insert([
            'name' => 'Spring 2015'
        ]);
        DB::table('cohorts')->insert([
            'name' => 'Fall 2014'
        ]);
    }
}