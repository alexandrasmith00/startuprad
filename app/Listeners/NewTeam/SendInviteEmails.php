<?php

namespace App\Listeners\NewTeam;

use App\Events\CreateNewTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Onboard\AccountSetup;
use Mail, Log;

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
     * @param  CreateNewTeam  $event
     * @return void
     */
    public function handle(CreateNewTeam $event)
    {
      foreach ($event->users as $user)
      {
        $token = AccountSetup::where('email', $user->email)->first()->token;
        $data = ['email' => $user->email, 'user' => $user, 'token' => $token];

        Mail::queue('auth.emails.onboard', $data, function($message) use ($data) {
          $message->to($data['email'])->subject('Create your account');
        });
      }
    }
}
