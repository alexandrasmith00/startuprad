<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewCurrentsToProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('ideas', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('tagline');
            $table->dropColumn('website');
            $table->dropColumn('logo');

        });
        
        $categories = DB::table('categories')->get();
        
        foreach ($categories as $category)
        {            
            
            Schema::table('ideas', function($table) use ($category)
            {
                $table->string($category->name);
            });
        }
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        $categories = DB::table('categories')->get();
        
        foreach ($categories as $category)
        {            
            if (Schema::hasColumn('ideas', $category->name))
                Schema::table('ideas', function($table) use ($category)
                {

                    $table->dropColumn($category->name);
                });
        }
        
        Schema::table('ideas', function($table)
        {
            $table->string('name');
            $table->string('tagline');
            $table->string('website');
            $table->string('logo');

        });
    }
}
