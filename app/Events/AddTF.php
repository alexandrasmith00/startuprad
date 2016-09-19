<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AddTF extends Event
{
    use SerializesModels;

    public $first;
    public $last;
    public $email;
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($first, $last, $email)
    {
        $this->first = $first;
        $this->last = $last;
        $this->email = $email;
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
