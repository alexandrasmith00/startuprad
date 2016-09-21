<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDateToCohorts extends Migration
{
  public function up()
  {
    Schema::table('cohorts', function ($table) {
      $table->date('start');
      $table->date('end');
    });
  }

  /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
  {
    Schema::table('cohorts', function ($table) {
      $table->dropColumn('start');
      $table->dropColumn('end');
    });
  }
}
