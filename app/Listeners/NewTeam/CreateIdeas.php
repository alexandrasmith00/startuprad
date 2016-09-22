<?php

namespace App\Listeners\NewTeam;

use App\Events\CreateNewTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Idea;
use App\Events\NewThinking;

class CreateIdeas
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

      $idea = Idea::create(['name' => $event->name]);
      $event->idea = $idea;


      foreach ($event->users as $user)
      {
        $user->idea_id = $idea->id;
        $user->save();

        event(new NewThinking($idea, 'name', ["Name" => $event->name], $user));
      }
    }
}
