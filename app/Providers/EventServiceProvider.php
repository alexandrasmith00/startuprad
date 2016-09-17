<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\TeamApplied' => [
            'App\Listeners\GenerateApplicationPDF',
            'App\Listeners\SendConfirmationEmails',
            'App\Listeners\SendApplicationEmail',
        ],

        'App\Events\UserCreated' => [
            'App\Listeners\AddRole',
        ],

        'App\Events\StudentInvited' => [
          'App\Listeners\CreateNewUser',
          'App\Listeners\CreateNewStudent',
          'App\Listeners\CreateIdea',
          'App\Listeners\AddToTeam',
          'App\Listeners\AddToCohort',
          'App\Listeners\SetupOnboarding',
          'App\Listeners\SetupAccount',
//          'App\Listeners\SendInviteEmail',
        ],

        'App\Events\TeamReturned' => [
          'App\Listeners\CreateNewStudents',
          'App\Listeners\AddToNewCohort',
          'App\Listeners\SetupOnboardings',
          'App\Listeners\SetupAccounts',
//          'App\Listeners\SendInviteEmails',
        ],

        'App\Events\NewThinking' => [
          'App\Listeners\CreateThinking',
          'App\Listeners\CreateResources',
          'App\Listeners\GeneratePost',
        ],


        'App\Events\UpdateThinking' => [
          'App\Listeners\RemoveOldThinking',
          'App\Listeners\StartNewThinking',
        ],


    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);


    }
}
