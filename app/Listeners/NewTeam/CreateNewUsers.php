<?php

namespace App\Listeners\NewTeam;

use App\Events\CreateNewTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User, App\Models\Role, App\Models\Roles\UserRole;

class CreateNewUsers
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

        foreach ($event->team_members as $team_member)
        {
          $user = User::firstOrCreate([ 'email' => $team_member['email'] ]);
          $user->first = $team_member['first'];
          $user->last = $team_member['last'];
          $user->name = trim($team_member['first']) . " " . trim($team_member['last']);
          $user->save();

          array_push($event->users, $user);

          $role = Role::firstOrCreate(['name' => 'Student']);
          $userRole = UserRole::firstOrCreate(['role_id' => $role->id, 'user_id' => $user->id]);
        }
    }
}
