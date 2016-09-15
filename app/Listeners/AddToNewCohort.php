<?php

namespace App\Listeners;

use App\Events\TeamReturned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Cohorts\CohortIdea, App\Models\Cohorts\CohortUser;
use App\Models\Cohort;
class AddToNewCohort
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
     * @param  TeamReturned  $event
     * @return void
     */
    public function handle(TeamReturned $event)
    {
        $cohort = Cohort::where('name', 'Fall 2016')->first();

        // Add team to cohort
        $cohortIdea = CohortIdea::firstOrCreate(['cohort_id' => $cohort->id, 'idea_id' => $event->idea->id]);

        // Add team members to cohort
        foreach ($event->users as $user)
          $cohortUser = CohortUser::firstOrCreate(['cohort_id' => $cohort->id, 'user_id' => $user->id]);

    }
}
