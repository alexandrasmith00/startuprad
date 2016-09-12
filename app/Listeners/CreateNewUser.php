<?php

namespace App\Listeners;

use App\Events\StudentInvited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\User, App\Models\Role;

class CreateNewUser
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
        $event->user = User::firstOrCreate([
          'first' => $event->applicant->first,
          'last' => $event->applicant->last,
          'name' => $event->applicant->first . ' ' . $event->applicant->last,
          'email' => $event->applicant->email,
          'applicant' => $event->applicant->id,
        ]);
    }
}
