<?php

namespace App\Listeners;

use App\Events\AddTF;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User, App\Models\Role, App\Models\Roles\UserRole;

class AddStaffRole
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
     * @param  AddTF  $event
     * @return void
     */
    public function handle(AddTF $event)
    {
      $role = Role::firstOrCreate(['name' => 'TF']);
      $userRole = UserRole::firstOrCreate(['role_id' => $role->id, 'user_id' => $event->user->id]);
    }
}
