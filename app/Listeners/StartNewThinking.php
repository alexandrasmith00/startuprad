<?php

namespace App\Listeners;

use App\Events\UpdateThinking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\NewThinking;

class StartNewThinking
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
     * @param  UpdateThinking  $event
     * @return void
     */
    public function handle(UpdateThinking $event)
    {
        event(new NewThinking($event->idea, $event->name, $event->resources, $event->author));
    }
}
