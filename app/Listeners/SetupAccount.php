<?php

namespace App\Listeners;

use App\Events\StudentInvited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Onboard\AccountSetup;
use Carbon\Carbon;

class SetupAccount
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
        AccountSetup::updateOrCreate(['email' => $event->user->email], [
          'token' => hello_token(40),
          'created_at' => Carbon::now()
        ]);
    }
}
