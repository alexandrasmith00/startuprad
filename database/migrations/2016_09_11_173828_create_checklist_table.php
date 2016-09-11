<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistTable extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
  {
    Schema::create('checklists', function (Blueprint $table) {
      $table->increments('id');
      $table->string('description');
      $table->string('completed');
      $table->text('internal');
    });
  }

  /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
  {
    Schema::drop('checklists');
  }
}
