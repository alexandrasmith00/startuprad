<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'name',
            'datatype' => 'text'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'tagline',
            'datatype' => 'text'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'site',
            'datatype' => 'link'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'logo',
            'datatype' => 'image'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'legalStatus',
            'datatype' => 'text'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'lawyers',
            'datatype' => 'text'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'equitySplit',
            'datatype' => 'text'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'debtEquity',
            'datatype' => 'text'
        ]);
    
        DB::table('categories')->insert([
            'name' => 'vestingSchedule',
            'datatype' => 'text'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'fundingRound',
            'datatype' => 'text'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'slideDeck',
            'datatype' => 'link'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'facebook',
            'datatype' => 'link'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'linkedIn',
            'datatype' => 'link'
        ]);

        DB::table('categories')->insert([
            'name' => 'teamMembers',
            'datatype' => 'array'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'description',
            'datatype' => 'text'
        ]);
    
    }
}