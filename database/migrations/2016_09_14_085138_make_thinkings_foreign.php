<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeThinkingsForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('thinkings', function ($table) {
        $table->integer('idea_id')->unsigned()->nullable()->change();
        $table->foreign('idea_id')->references('id')->on('ideas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('thinkings', function ($table) {
        $table->dropForeign('thinkings_idea_id_foreign');
      });
    }
}
