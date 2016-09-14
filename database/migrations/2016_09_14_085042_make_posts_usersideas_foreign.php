<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakePostsUsersideasForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function ($table) {
        $table->integer('idea_id')->unsigned()->nullable()->change();
        $table->foreign('idea_id')->references('id')->on('ideas');

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
      Schema::table('posts', function ($table) {
        $table->dropForeign('posts_idea_id_foreign');
        $table->dropForeign('posts_user_id_foreign');
      });

    }
}
