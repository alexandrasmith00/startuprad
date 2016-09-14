<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeUsersRolesForeign extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
        Schema::table('users_roles', function ($table) {
          $table->integer('role_id')->unsigned()->nullable()->change();
          $table->foreign('role_id')->references('id')->on('roles');

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
        Schema::table('users_roles', function ($table) {
          $table->dropForeign('users_roles_role_id_foreign');
          $table->dropForeign('users_roles_user_id_foreign');
        });
      }
}
