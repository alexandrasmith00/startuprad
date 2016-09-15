<?php

namespace App\Listeners;

use App\Events\TeamReturned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;
use App\Models\Applications\Applicant;
use App\Models\Applications\Application;
use App\Models\Student;
use App\Events\NewThinking;

class CreateNewStudents
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
      // Check for applicants
      $updated_name = False;
      $updated_site = False;
      $updated_video = False;

      foreach ($event->users as $user)
      {
          // If there was an application
          if (Applicant::where('email', $user->email)->exists()) { // create new student

            $applicant =  Applicant::where('email', $user->email)->first();

            // Add as a student
            $student = Student::firstOrNew(['user_id' => $user->id]);
            $student->year = $applicant->year;
            $student->secondary = $applicant->secondary;
            $student->concentration = $applicant->concentration;
            $student->resume = $applicant->resume;
            $student->save();

            // Create new thinkings
            $app = $applicant->application;
            $app = Application::where('id', $applicant->application)->first();

            $event->idea->name = $app->team;
            $event->idea->save();

            if (! $updated_name) {
              event(new NewThinking($event->idea, 'name', ["Name" => $app->team], $user));
              $updated_name = True;
            }

            if (! $updated_site) {
              event(new NewThinking($event->idea, 'site', ["Site" => $app->url], $user));
              $updated_site = True;
            }

            if (! $updated_video) {
              event(new NewThinking($event->idea, 'video', ["Video" => $app->video], $user));
              $updated_video = True;
            }

            event(new NewThinking($event->idea, 'teamMember', ["Name" => $user->name, 'Email' => $user->email, 'Year' => $applicant->year, 'Concentration' => $applicant->concentration, 'Secondary' => $applicant->secondary], $user));
          }


      }

    }
}
