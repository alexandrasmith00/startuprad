<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//      Schema::create('advisors', function (Blueprint $table) {
//        $table->increments('id');
//        $table->string('title');
//        $table->integer('user_id')->unsigned()->nullable();
//        $table->foreign('user_id')->references('id')->on('users');
//        $table->string('contact_email');
//        $table->string('linkedin');
//        $table->text('description');
//      });
    }

    /**
       * Reverse the migrations.
       *
       * @return void
       */
    public function down()
    {
      Schema::drop('advisors');
    }
}
