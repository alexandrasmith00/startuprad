<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeTeamsUsersForeign extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
        Schema::table('teams_users', function ($table) {
          $table->integer('team_id')->unsigned()->nullable()->change();
          $table->foreign('team_id')->references('id')->on('teams');

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
        Schema::table('teams_users', function ($table) {
          $table->dropForeign('teams_users_team_id_foreign');
          $table->dropForeign('teams_users_user_id_foreign');
        });
      }
}
