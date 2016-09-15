<?php

namespace App\Listeners;

use App\Events\StudentInvited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Applications\Application;
use App\Models\TeamUser, App\Models\Team;
use DB, Log;

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
     * @param  StudentInvited  $event
     * @return void
     */
    public function handle(StudentInvited $event)
    {
        // Generate team for the idea
        $team = Team::firstOrCreate(['idea_id' => $event->idea->id]);

        // Add applicant to team
        $user = TeamUser::firstOrCreate(['team_id' => $team->id, 'user_id' => $event->user->id]);

    }
}
