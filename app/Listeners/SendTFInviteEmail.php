<?php

namespace App\Listeners;

use App\Events\TFCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Onboard\AccountSetup;
use Mail;

class SendTFInviteEmail
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
        $token = AccountSetup::where('email', $event->email)->first()->token;

        $data = ['email' => $event->email, 'user' => $event->user, 'token' => $token];

        Mail::queue('auth.emails.onboard', $data, function($message) use ($data) {
          $message->to($data['email'])->subject('Create your account');
        });
    }
}
