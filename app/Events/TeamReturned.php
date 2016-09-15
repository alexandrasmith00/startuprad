<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\Idea, App\Models\User, App\Models\Team;

class TeamReturned extends Event
{
    use SerializesModels;

    public $idea;
    public $team;
    public $users;

    /**
       * Create a new event instance.
       *
       * @return void
       */
    public function __construct(Idea $idea)
    {
      $this->idea = $idea;
      $this->team = $idea->team;
      $this->users = $this->team->users;

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
