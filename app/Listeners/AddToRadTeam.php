<?php

namespace App\Listeners;

use App\Events\AddTF;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\TeamUser;
use App\Models\Idea;

class AddToRadTeam
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
     * @param  AddTF  $event
     * @return void
     */
    public function handle(AddTF $event)
    {
        $rad = Idea::find(22);
        $teamUser = TeamUser::create(['team_id' => $rad->team->id, 'user_id' => $event->user->id]);
        $event->user->idea_id = 22;
        $event->user->save();
    }
}
