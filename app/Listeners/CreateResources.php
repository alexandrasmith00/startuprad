<?php

namespace App\Listeners;

use App\Events\NewThinking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Resource;
use Log;

class CreateResources
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
        foreach ($event->resources as $descriptor => $value)
        {
          Resource::create([
            'descriptor' => $descriptor,
            'value' => $value,
            'thinking_id' => $event->thinking->id,
          ]);
        }
    }
}
