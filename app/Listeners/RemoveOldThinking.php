<?php

namespace App\Listeners;

use App\Events\UpdateThinking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Thinking;

class RemoveOldThinking
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
        Thinking::where('idea_id', $event->idea->id)->where('name', $event->name)->update(['current' => 1]);
    }
}
