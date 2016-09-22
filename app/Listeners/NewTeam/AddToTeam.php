<?php

namespace App\Listeners\NewTeam;

use App\Events\CreateNewTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Team, App\Models\TeamUser;

class AddToTeam
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CreateNewTeam  $event
     * @return void
     */
    public function handle(CreateNewTeam $event)
    {
      // Generate team for the idea
      $team = Team::firstOrCreate(['idea_id' => $event->idea->id]);

      // Add users to team
      foreach ($event->users as $user)
        $teamuser = TeamUser::firstOrCreate(['team_id' => $team->id, 'user_id' => $user->id]);

    }
}
