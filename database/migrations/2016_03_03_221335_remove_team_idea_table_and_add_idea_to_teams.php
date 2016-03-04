<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTeamIdeaTableAndAddIdeaToTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('teams_ideas');  
        
        Schema::table('teams', function($table)
        {
            $table->integer('idea_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('teams_ideas', function (Blueprint $table) {
            $table->integer('team_id');
            $table->integer('idea_id');
        });
        
        Schema::table('teams', function($table)
        {
            $table->dropColumn('idea_id');
        });
    }
}
