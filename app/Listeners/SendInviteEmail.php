<?php

namespace App\Listeners;

use App\Events\StudentInvited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Onboard\AccountSetup;
use Mail;

class SendInviteEmail
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

        $token = AccountSetup::where('email', $event->user->email)->first()->token;

        $data = ['email' => $event->user->email, 'user' => $event->user, 'token' => $token];

        Mail::queue('auth.emails.onboard', $data, function($message) use ($data) {
          $message->to($data['email'])->subject('Create your account');
        });
    }
}
