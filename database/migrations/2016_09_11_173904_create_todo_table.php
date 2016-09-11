<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoTable extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
  {
    Schema::create('todos', function (Blueprint $table) {
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->integer('checklist_id')->unsigned();
      $table->foreign('checklist_id')->references('id')->on('checklists')->onDelete('cascade');
      $table->timestamp('completed_at')->nullable();
    });
  }

  /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
  {
    Schema::drop('todos');
  }
}
