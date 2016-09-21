<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Idea;
use App\Events\AddTF, App\Events\CreateNewTeam;
use App\Models\Cohort;

class RADController extends Controller
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

  public function manageRad()
  {
    if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Professor')) {
      $idea = Idea::find(22);
      return view('admin.manage')->withIdea($idea);
    }

    return redirect()->back()->with('flash-message', "You do not have permission.");
  }

  public function addTF(Request $request)
  {
    if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Professor')) {

        event (new AddTF($request->input('first'), $request->input('last'), $request->input('email') ));
        return redirect()->back()->with('flash-message', $request->input('first') . " has been added as a TF.");
    }
  }


  public function manageCohorts()
  {
    if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Professor') || Auth::user()->hasRole('TF') ) {
      $cohorts = Cohort::orderBy('start', 'desc')->get();
      return view('admin.cohorts')->withCohorts($cohorts);
    }

    return redirect()->back()->with('flash-message', "You do not have permission.");
  }

  public function addTeam(Request $request)
  {
    $team_members = [];

    for ($i = 0; $i < $request->input('team_size'); $i++)
    {
      if ($i == 0)
        $team_members[0] = ['first' => $request->input('first'), 'last' => $request->input('last'), 'email' => $request->input('email')];
      else
        $team_members[$i] = ['first' => $request->input('first' . ($i + 1) ), 'last' => $request->input('last' . ($i + 1) ), 'email' => $request->input('email' . ($i + 1) )];
    }

    event (new CreateNewTeam($request->input('name'), $request->input('cohort'), $team_members));
  }


}
