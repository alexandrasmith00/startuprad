<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Log;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Dusterio\LinkPreview\Client;


class FeedController extends Controller
{




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {



      // ordering goes in here!
      $posts = Post::whereIn('idea_id', Auth::user()->cohortTeams())
            ->orderBy('radnow', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('tagged')
            ->paginate(10);

        return view('feed.index')->withPosts($posts);
    }


    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        return view('blog.post')->withPost($post);
    }

    public function createPost(Request $request)
    {
        $title = 'asked a question';
        if ($request->input('type') == 'chat')
            $title = 'said to someone else';

        $post = new Post;
        $post->content = $request->input('content');
        $post->user_id = $request->input('user-id');
        $post->idea_id = $request->input('idea-id');
        $post->type = $request->input('type');
        $post->title = $title;
        if(stristr($request->input('tags'), '#radnow') !== FALSE)
          $post->radnow = true;
        $post->save();


        $post->tag(explode(',', str_replace("#", "", $request->input('tags'))));

        return [$post, $post->user, $post->idea, $post->tagged];
    }

    public function bugreport(Request $request)
    {
        DB::table('bugs')->insert(
            ['user_id' => Auth::user()->id, 'report' => $request->input('feedback'), 'importance' => $request->input('importance'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]
        );

        return redirect()->back()->with('flash-strong', 'Thanks!')->with('flash-message', "We've received your feedback.");
    }
}
