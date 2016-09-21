<?php

namespace App\Listeners\NewTeam;

use App\Events\CreateNewTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        //
    }
}
