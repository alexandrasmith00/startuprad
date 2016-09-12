<?php

namespace App\Listeners;

use App\Events\NewThinking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Thinking;

class CreateThinking
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
        $event->thinking = Thinking::create([
          'idea_id' => $event->idea->id,
          'current' => 1,
          'name' => $event->name,
          'name_view' => name_view($event->name)
        ]);
    }
}
