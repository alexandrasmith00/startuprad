<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeThinkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thinkings', function($table)
        {
            $table->dropColumn('category_id');
            $table->dropColumn('post_id');
            $table->dropColumn('body');
            
            $table->increments('id');
            $table->string('name');
            $table->string('name_view');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thinkings', function($table)
        {
            $table->integer('post_id');
            $table->integer('category_id');
            $table->string('body');
            
            $table->dropColumn('id');
            $table->dropColumn('name');
            $table->dropColumn('name_view');
        });
    }
}
