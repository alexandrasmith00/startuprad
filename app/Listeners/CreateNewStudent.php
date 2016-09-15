<?php

namespace App\Listeners;

use App\Events\StudentInvited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Student;
use Log;

class CreateNewStudent
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
      $student = Student::firstOrCreate(['user_id' => $event->user->id]);
      $student->year = $event->applicant->year;
      $student->secondary = $event->applicant->secondary;
      $student->concentration = $event->applicant->concentration;
      $student->resume = $event->applicant->resume;
      $student->save();
    }
}
