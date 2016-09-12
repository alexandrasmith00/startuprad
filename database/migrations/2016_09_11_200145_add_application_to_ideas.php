<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicationToIdeas extends Migration
{
    public function up()
  {
    Schema::table('ideas', function ($table) {
      $table->integer('application')->unsigned()->nullable();
      $table->foreign('application')->references('id')->on('applications');
    });
  }

  /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
  {
    Schema::table('ideas', function ($table) {
      $table->dropForeign('ideas_application_foreign');
      $table->dropColumn('application');
    });
  }
}
