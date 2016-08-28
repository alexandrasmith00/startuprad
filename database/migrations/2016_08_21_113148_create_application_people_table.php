<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('applicants', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('application')->unsigned()->nullable();
        $table->foreign('application')->references('id')->on('applications');
        $table->string('first');
        $table->string('last');
        $table->string('email');
        $table->integer('year');
        $table->string('concentration');
        $table->string('secondary');
        $table->string('resume');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('applicants');
    }
}
