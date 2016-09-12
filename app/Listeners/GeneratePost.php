<?php

namespace App\Listeners;

use App\Events\NewThinking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Post;
use Log;

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
    public function handle(NewThinking $event)
    {
        // Generate the content
        $content = "";
        foreach ($event->resources as $descriptor => $value) {
          if ($content == "")
            $content = $descriptor . ": " . $value;
          else
            $content .= "\r\n" . $descriptor . ": " . $value;
        }

        Log::info($event->author);

        $post = Post::create([
          'user_id' => $event->author->id,
          'idea_id' => $event->idea->id,
          'title' => " updated its " . name_view($event->name)  . ".",
          'content' => $content,
          'type'=> 'update'
        ]);

        $post->tag(strtolower(str_replace(" ", "", $event->name)));
    }
}
