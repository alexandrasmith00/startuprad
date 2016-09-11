<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountSetupLink extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
  {
    Schema::create('account_setups', function (Blueprint $table) {
      $table->string('email')->index();
      $table->string('token');
      $table->timestamp('created_at');
    });
  }

  /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
  {
    Schema::drop('account_setups');
  }
}
