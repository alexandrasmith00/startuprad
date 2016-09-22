<?php

namespace App\Listeners\NewTeam;

use App\Events\CreateNewTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Onboard\AccountSetup;
use Carbon\Carbon;

class SetupAccounts
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
        foreach($event->users as $user)
        {
          AccountSetup::updateOrCreate(['email' => $user->email], [
            'token' => hello_token(40),
            'created_at' => Carbon::now()
          ]);
        }
    }
}
