<?php

namespace App\Listeners;

use App\Events\TFCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Onboard\AccountSetup;
use Carbon\Carbon;

class TFAccountSetup
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
     * @param  TFCreated  $event
     * @return void
     */
    public function handle(TFCreated $event)
    {
      AccountSetup::updateOrCreate(['email' => $event->user->email], [
        'token' => hello_token(40),
        'created_at' => Carbon::now()
      ]);
    }
}
