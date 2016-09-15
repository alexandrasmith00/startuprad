<?php

namespace App\Listeners;

use App\Events\TeamReturned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Checklist\Checklist, App\Models\Checklist\Todo;


class SetupOnboardings
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

      foreach ($event->users as $user) {
          $descriptions = [
            'Confirm email address' => 'Email address confirmed',
            'Create a password' => 'Password created',
            'Add profile picture' => 'Profile picture added',
            'Add company role' => 'Company role added'
          ];

          foreach ($descriptions as $description => $completed)
          {
            $checklist = Checklist::firstOrCreate([
              'description' => $description,
              'completed' => $completed,
              'internal' => 'student-onboarding'
            ]);

            $todo = Todo::firstOrCreate(['user_id' => $user->id, 'checklist_id' => $checklist->id]);
          }

          $descriptions = [
            'Add legal' => 'Legal added',
            'Add funding' => 'Funding added',
            'Add advisors' => 'Advisors added',
            'Add partnerships' => 'Partnerships added'
          ];

          foreach ($descriptions as $description => $completed)
          {
            $checklist = Checklist::firstOrCreate([
              'description' => $description,
              'completed' => $completed,
              'internal' => 'team-onboarding'
            ]);

            $todo = Todo::firstOrCreate(['user_id' => $user->id, 'checklist_id' => $checklist->id]);
          }
      }
    }
}
