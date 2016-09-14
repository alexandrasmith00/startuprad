<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeResourcesForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('resources', function ($table) {
        $table->integer('thinking_id')->unsigned()->nullable()->change();
        $table->foreign('thinking_id')->references('id')->on('thinkings');
      });



    }

    /**
           * Reverse the migrations.
           *
           * @return void
           */
    public function down()
    {

      Schema::table('resources', function ($table) {
        $table->dropForeign('resources_thinking_id_foreign');
      });

    }
}
