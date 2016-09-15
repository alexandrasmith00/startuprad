<?php

namespace App\Listeners;

use App\Events\TeamReturned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;
use App\Models\Onboard\AccountSetup;
use Mail;

class SendInviteEmails
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
     * @param  TeamReturned  $event
     * @return void
     */
    public function handle(TeamReturned $event)
    {
        foreach ($event->users as $user)
        {
          $token = AccountSetup::where('email', $user->email)->first()->token;
          $data = ['email' => $user->email, 'user' => $user, 'token' => $token];
//          Mail::queue('auth.emails.onboard', $data, function($message) use ($data) {
//            $message->to($data['email'])->subject('Create your account');
//          });
        }
    }
}
