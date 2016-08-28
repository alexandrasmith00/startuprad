<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('applications', function (Blueprint $table) {
        $table->increments('id');
        $table->string('team');
        $table->text('description');
        $table->string('url')->nullable();
        $table->string('video');
      });
    }

    /**
       * Reverse the migrations.
       *
       * @return void
       */
    public function down()
    {
      Schema::drop('applications');
    }
}
