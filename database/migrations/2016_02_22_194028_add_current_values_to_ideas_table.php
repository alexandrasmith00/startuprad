<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCurrentValuesToIdeasTable extends Migration
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
            $table->string('name');
            $table->string('tagline');
            $table->string('website');
            $table->string('logo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ideas', function($table)
        {
            $table->dropColumn('name');
        });
        
    }
}
