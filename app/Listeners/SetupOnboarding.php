<?php

namespace App\Listeners;

use App\Events\StudentInvited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        //
    }
}
