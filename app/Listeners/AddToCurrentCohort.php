<?php

namespace App\Listeners;

use App\Events\AddTF;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Cohort, App\Models\Cohorts\CohortIdea, App\Models\Cohorts\CohortUser;

class AddToCurrentCohort
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
      // Generate team for the idea
      $cohort = Cohort::firstOrNew(['name' => 'Fall 2016']);
      $cohortUser = CohortUser::firstOrCreate(['user_id' => $event->user->id, 'cohort_id' => $cohort->id]);
    }
}
