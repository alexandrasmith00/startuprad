<?php

namespace App\Listeners;

use App\Events\NewThinking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GeneratePost
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
     * @param  NewThinking  $event
     * @return void
     */
    public function handle(NewThinking $event)
    {
        //
    }
}
