<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeCohortsIdeaForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('cohorts_ideas', function ($table) {
        $table->integer('cohort_id')->unsigned()->nullable()->change();
        $table->foreign('cohort_id')->references('id')->on('cohorts');

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

      Schema::table('cohorts_ideas', function ($table) {
        $table->dropForeign('cohorts_ideas_cohort_id_foreign');
        $table->dropForeign('cohorts_ideas_idea_id_foreign');
      });

    }
}
