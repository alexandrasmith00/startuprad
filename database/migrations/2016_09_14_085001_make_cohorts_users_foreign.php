<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeCohortsUsersForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('cohorts_users', function ($table) {
        $table->integer('cohort_id')->unsigned()->nullable()->change();
        $table->foreign('cohort_id')->references('id')->on('cohorts');

        $table->integer('user_id')->unsigned()->nullable()->change();
        $table->foreign('user_id')->references('id')->on('users');
      });



    }

    /**
         * Reverse the migrations.
         *
         * @return void
         */
    public function down()
    {

      Schema::table('cohorts_users', function ($table) {
        $table->dropForeign('cohorts_users_cohort_id_foreign');
        $table->dropForeign('cohorts_users_user_id_foreign');
      });

    }
}
