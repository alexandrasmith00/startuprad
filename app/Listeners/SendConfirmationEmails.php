<?php

namespace App\Listeners;

use App\Events\TeamApplied;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail, PDF;
use Log;

class SendConfirmationEmails
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
     * @param  TeamApplied  $event
     * @return void
     */
    public function handle(TeamApplied $event)
    {
        foreach ($event->app->applicants as $applicant) {
            $data = ['name' => $applicant->first];
            Mail::send('emails.newapplicant', $data, function($message) use($event, $applicant)
            {
              $message->to($applicant->email)->subject("We've received your application");
              $message->attachData($event->pdf->output(), $event->app->team . ".pdf");
            });
        }
    }
}
