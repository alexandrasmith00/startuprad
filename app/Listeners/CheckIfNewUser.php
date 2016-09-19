<?php

namespace App\Listeners;

use App\Events\AddTF;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;
use App\Events\TFCreated;

class CheckIfNewUser
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
        if (User::where('email', $event->email)->exists())
          $event->user = User::where('email', $event->email)->first();
        else {

          // create a new user
          $event->user = User::create([ 'email' => $event->email ]);
          $event->user->first = $event->first;
          $event->user->last = $event->last;
          $event->user->name = $event->first . ' ' . $event->last;
          $event->user->save();

          event (new TFCreated($event->email));
        }
    }
}
