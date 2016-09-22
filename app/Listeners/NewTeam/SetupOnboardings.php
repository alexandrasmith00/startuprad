<?php

namespace App\Listeners\NewTeam;

use App\Events\CreateNewTeam;
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
     * @param  CreateNewTeam  $event
     * @return void
     */
    public function handle(CreateNewTeam $event)
    {
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

        foreach ($event->users as $user)
          $todo = Todo::firstOrCreate(['user_id' => $user->id, 'checklist_id' => $checklist->id]);
      }
    }
}
