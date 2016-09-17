<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Filesystem\Filesystem;

use App\Models\Idea;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Thinking;
use App\Models\Resource;

class ProjectsController extends Controller
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


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index');
    }


    public function showRadTeam()
    {
        $rad = Idea::where('id', 22)->first();
        $posts = Post::where('idea_id', $rad->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('projects.rad')->withPosts($posts)->withIdea($rad);
    }


    public function editProfile()
    {
        return view('projects.edit')->withIdea(Auth::user()->idea);
    }

    public function editGeneral()
    {
        return view('projects.edit.edit-component.general')->withIdea(Auth::user()->idea);
    }

    public function updateGeneral(Request $request)
    {
      $idea = Idea::where('id', $request->input('idea'))->first();
      $canUpdate = $this->canUpdate($idea);

      if ($canUpdate)
      {
          if ($idea->name() != $request->input('name'))
            var_dump('name changed');

          if ($idea->tagline() != $request->input('tagline'))
            var_dump('tagline changed');

          if ($idea->description() != $request->input('description'))
            var_dump('description changed');

          if ($idea->url() != $request->input('url'))
            var_dump('url changed');

          if ($idea->location() != $request->input('location'))
            var_dump('location changed');

          if ($idea->video() != $request->input('video'))
            var_dump('video changed');

      }
      else
        return redirect()->back()->withInput()->with('flash-message', $canUpdate);
    }

    protected function canUpdate($idea)
    {
      if ($idea == null)
        return "There was an error updating.";

      $canEdit = $idea->team->users()->lists('user_id');
      foreach ($canEdit as $member)
        if ($member == Auth::user()->id )
          return true;

      return "You cannot update this profile page.";
    }


}
