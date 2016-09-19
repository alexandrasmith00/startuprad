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
use App\Events\UpdateThinking;

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

    public function show($id)
    {
      if ($id = 22)
        return $this->showRadTeam();

      $idea = Idea::where('id', $id)->first();

      if (Auth::user()->hasProject($id))
        return view('projects.edit')->withIdea(Auth::user()->idea);
      else
        return view('projects.show')->withIdea($idea);
    }

    public function editProfile() {

      return view('projects.edit')->withIdea(Auth::user()->idea);
    }
    public function editGeneral() { return view('projects.edit.general')->withIdea(Auth::user()->idea); }
    public function editSocial() { return view('projects.edit.social')->withIdea(Auth::user()->idea); }
    public function editOrganization() { return view('projects.edit.organization')->withIdea(Auth::user()->idea); }
    public function editValue() { return view('projects.edit.value')->withIdea(Auth::user()->idea); }
    public function editStrategy() { return view('projects.edit.strategy')->withIdea(Auth::user()->idea); }

    public function updateGeneral(Request $request)
    {
      $idea = Idea::where('id', $request->input('idea'))->first();
      $canUpdate = $this->canUpdate($idea);

      if ($canUpdate)
      {

          if ($idea->name != $request->input('name')) {
            $idea->update(['name' => $request->input('name')]);
            event(new UpdateThinking($idea, 'name', ["Name" => $request->input('name')], Auth::user()));
          }

          if ($idea->tagline() != $request->input('tagline'))
            event(new UpdateThinking($idea, 'tagline', ["Tagline" => $request->input('tagline')], Auth::user()));

          if ($idea->description() != $request->input('description'))
            event(new UpdateThinking($idea, 'description', ["Description" => $request->input('description')], Auth::user()));

          if ($idea->url() != $request->input('url'))
            event(new UpdateThinking($idea, 'site', ["Site" => $request->input('url')], Auth::user()));

          if ($idea->location() != $request->input('location'))
            event(new UpdateThinking($idea, 'location', ["Location" => $request->input('location')], Auth::user()));

          if ($idea->video() != $request->input('video'))
            event(new UpdateThinking($idea, 'video', ["Video" => $request->input('video')], Auth::user()));

          return redirect()->back()->with('flash-message', 'The overview has been updated.');
      }
      else
        return redirect()->back()->withInput()->with('flash-message', $canUpdate);
    }

    public function updateSocial(Request $request)
    {
      $idea = Idea::where('id', $request->input('idea'))->first();
      $canUpdate = $this->canUpdate($idea);

      if ($canUpdate)
      {

        if ($idea->facebook() != $request->input('facebook'))
          event(new UpdateThinking($idea, 'facebook', ["Facebook" => $request->input('facebook')], Auth::user()));

        if ($idea->twitter() != $request->input('twitter'))
          event(new UpdateThinking($idea, 'twitter', ["Twitter" => $request->input('twitter')], Auth::user()));

        if ($idea->linkedIn() != $request->input('linkedIn'))
          event(new UpdateThinking($idea, 'linkedIn', ["LinkedIn" => $request->input('linkedIn')], Auth::user()));


        return redirect()->back()->with('flash-message', 'The overview has been updated.');
      }
      else
        return redirect()->back()->withInput()->with('flash-message', $canUpdate);
    }

    public function updateValue(Request $request)
    {
      $idea = Idea::where('id', $request->input('idea'))->first();
      $canUpdate = $this->canUpdate($idea);

      if ($canUpdate)
      {
        if ($idea->customer() != $request->input('customer'))
          event(new UpdateThinking($idea, 'customer', ["Customer" => $request->input('customer')], Auth::user()));

        if ($idea->demands() != $request->input('demands'))
          event(new UpdateThinking($idea, 'demands', ["Demands" => $request->input('demands')], Auth::user()));

        if ($idea->product() != $request->input('product'))
          event(new UpdateThinking($idea, 'product', ["Product" => $request->input('product')], Auth::user()));

        if ($idea->value() != $request->input('value'))
          event(new UpdateThinking($idea, 'value', ["Value" => $request->input('value')], Auth::user()));

        if ($idea->useCase() != $request->input('useCase'))
          event(new UpdateThinking($idea, 'useCase', ["Use Case" => $request->input('useCase')], Auth::user()));

        return redirect()->back()->with('flash-message', 'The value chain has been updated.');
      }
      else
        return redirect()->back()->withInput()->with('flash-message', $canUpdate);
    }


    public function updateStrategy(Request $request)
    {
      $idea = Idea::where('id', $request->input('idea'))->first();
      $canUpdate = $this->canUpdate($idea);

      if ($canUpdate)
      {

        if ($idea->market() != $request->input('market'))
          event(new UpdateThinking($idea, 'market', ["Market" => $request->input('market')], Auth::user()));

        if ($idea->competition() != $request->input('competition'))
          event(new UpdateThinking($idea, 'competition', ["Competition" => $request->input('competition')], Auth::user()));

        if ($idea->marketing() != $request->input('marketing'))
          event(new UpdateThinking($idea, 'marketing', ["Marketing" => $request->input('marketing')], Auth::user()));


        if ($idea->businessModel() != $request->input('businessModel'))
          event(new UpdateThinking($idea, 'businessModel', ["Business Model" => $request->input('businessModel')], Auth::user()));

        return redirect()->back()->with('flash-message', 'The strategy has been updated.');
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
