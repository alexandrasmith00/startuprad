<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeTeamsForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('teams', function ($table) {
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
      Schema::table('teams', function ($table) {
        $table->dropForeign('teams_idea_id_foreign');
      });
    }
}
