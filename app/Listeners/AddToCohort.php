<?php

namespace App\Listeners;

use App\Events\StudentInvited;
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
     * @param  StudentInvited  $event
     * @return void
     */
    public function handle(StudentInvited $event)
    {
      // Generate team for the idea
      $cohort = Cohort::firstOrNew(['name' => 'Fall 2016']);

      $cohortIdea = CohortIdea::firstOrCreate(['idea_id' => $event->idea->id, 'cohort_id' => $cohort->id]);

      $cohortUser = CohortUser::firstOrCreate(['user_id' => $event->user->id, 'cohort_id' => $cohort->id]);

    }
}
