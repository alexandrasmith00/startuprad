<?php

namespace App\Listeners;

use App\Events\TeamApplied;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendApplicationEmail
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
     * @param  TeamApplied  $event
     * @return void
     */
    public function handle(TeamApplied $event)
    {
        //
    }
}
