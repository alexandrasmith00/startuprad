<?php

namespace App\Listeners;

use App\Events\TeamApplied;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail, PDF;

class SendApplicationEmail
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
        $data = ['startup' => $event->app->team, 'staff' => 'Lexi'];
        Mail::send('emails.newforstaff', $data, function($message) use($event)
        {
             $message->to('alexandrasmith00@gmail.com')->subject('New Application');
             $message->attachData($event->pdf->output(), $event->app->team . ".pdf");
        });
    }
}
