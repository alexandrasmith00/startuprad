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
            'name' => 'website',
            'datatype' => 'text'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'logo',
            'datatype' => 'image'
        ]);

    }
}