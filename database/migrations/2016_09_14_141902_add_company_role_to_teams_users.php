<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyRoleToTeamsUsers extends Migration
{
  public function up()
  {
    Schema::table('teams_users', function ($table) {
      $table->string('company_role');
    });
  }

  /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
  {
    Schema::table('teams_users', function ($table) {
      $table->dropColumn('company_role');
    });
  }
}
