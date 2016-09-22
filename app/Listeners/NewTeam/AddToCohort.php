<?php

namespace App\Listeners\NewTeam;

use App\Events\CreateNewTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Cohort, App\Models\Cohorts\CohortIdea, App\Models\Cohorts\CohortUser;

class AddToCohort
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
      $cohortIdea = CohortIdea::firstOrCreate(['idea_id' => $event->idea->id, 'cohort_id' => $event->cohort]);

      foreach ($event->users as $user)
        $cohortUser = CohortUser::firstOrCreate(['user_id' => $user->id, 'cohort_id' => $event->cohort]);

    }
}
