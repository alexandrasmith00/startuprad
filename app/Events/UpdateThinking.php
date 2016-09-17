<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UpdateThinking extends Event
{
    use SerializesModels;

    public $idea;
    public $name;
    public $resources;
    public $author;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($idea, $name, $resources, $author)
    {
        $this->idea = $idea;
        $this->name = $name;
        $this->resources = $resources;
        $this->author = $author;
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
