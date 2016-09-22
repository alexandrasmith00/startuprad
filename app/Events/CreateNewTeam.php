<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CreateNewTeam extends Event
{
    use SerializesModels;

    public $name;
    public $cohort;
    public $team_members;
    public $users = [];
    public $idea;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name, $cohort, $team_members)
    {
      $this->name = $name;
      $this->cohort = $cohort;
      $this->team_members = $team_members;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
