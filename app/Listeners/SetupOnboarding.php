<?php

namespace App\Listeners;

use App\Events\StudentInvited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Checklist\Checklist, App\Models\Checklist\Todo;

class SetupOnboarding
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

          $todo = Todo::firstOrCreate(['user_id' => $event->user->id, 'checklist_id' => $checklist->id]);
        }
    }
}
