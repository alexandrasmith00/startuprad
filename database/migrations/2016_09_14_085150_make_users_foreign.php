<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeUsersForeign extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
        Schema::table('users', function ($table) {
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
        Schema::table('users', function ($table) {
          $table->dropForeign('users_idea_id_foreign');
        });
      }
}
