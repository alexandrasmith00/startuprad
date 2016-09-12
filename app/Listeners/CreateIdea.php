<?php

namespace App\Listeners;

use App\Events\StudentInvited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Idea;
use App\Events\NewThinking;

class CreateIdea
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
     * @param  StudentInvited  $event
     * @return void
     */
    public function handle(StudentInvited $event)
    {
      // Get applicants startup application
      $app = $event->applicant->application()->first();

      // Check if an idea has already been created for the idea
      if (Idea::where('application', $app->id)->exists() )
        $idea = Idea::where('application', $app->id)->first();
      else { // If not, create one
        $idea = Idea::create([
          'name' => $app->team,
          'application' => $app->id
        ]);
      }

      event(new NewThinking($idea, 'name', ["Name" => $app->team], $event->user));
      event(new NewThinking($idea, 'site', ["Site" => $app->url], $event->user));
      event(new NewThinking($idea, 'video', ["Video" => $app->video], $event->user));
      event(new NewThinking($idea, 'teamMember', ["Name" => $event->user->name, 'Email' => $event->user->email, 'Year' => $event->applicant->year, 'Concentration' => $event->applicant->concentration, 'Secondary' => $event->applicant->secondary], $event->user));
    }
}
