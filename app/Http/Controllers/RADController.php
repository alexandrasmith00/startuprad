<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Idea;
use App\Events\AddTF;


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


}
