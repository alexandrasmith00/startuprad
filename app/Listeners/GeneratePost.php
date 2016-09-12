<?php

namespace App\Listeners;

use App\Events\NewThinking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Post;

class GeneratePost
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
     * @param  NewThinking  $event
     * @return void
     */
    public function handle(ResourceCreated $event)
    {
        // Generate the content
        if ($content == "")
          $content = $resource->descriptor . ": " . $resource->value;
        else
          $content .= "\r\n" . $resource->descriptor . ": " . $resource->value;


        $post = Post::create([
          'user_id' => $event->author->id,
          'idea_id' => $event->idea->id,
          'title' => " updated its " .  . ".",
          'content' => $content,
          'type'=> 'update'
        ]);

        $post->tag(strtolower(str_replace(" ", "", $event->name)));
    }
}
