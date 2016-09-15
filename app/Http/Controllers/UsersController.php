<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;


class UsersController extends Controller
{
  public $concentrations = [
    'African and African American Studies',
    'Anthropology',
    'Applied Mathematics',
    'Astrophysics',
    'Biomedical Engineering',
    'Chemical and Physical Biology',
    'Chemistry',
    'Chemistry and Physics',
    'Classics',
    'Comparative Literature',
    'Computer Science',
    'Earth and Planetary Sciences',
    'East Asian Studies',
    'Economics',
    'Electrical Engineering',
    'Engineering Sciences',
    'English',
    'Environmental Science and Public Policy',
    'Folklore and Mythology',
    'Germanic Languages and Literatures',
    'Government',
    'History',
    'History and Literature',
    'History and Science',
    'History of Art and Architecture',
    'Human Developmental and Regenerative Biology',
    'Human Evolutionary Biology',
    'Integrative Biology',
    'Linguistics',
    'Mathematics',
    'Mechanical Engineering',
    'Molecular and Cellular Biology',
    'Music',
    'Near Eastern Languages and Civilizations',
    'Neurobiology',
    'Philosophy',
    'Physics',
    'Psychology',
    'Religion, Comparative Study of',
    'Romance Languages and Literatures',
    'Slavic Languages and Literatures',
    'Social Studies',
    'Sociology',
    'South Asian Studies',
    'Special Concentrations',
    'Statistics',
    'Theater, Dance, and Media',
    'Visual and Environmental Studies',
    'Women, Gender, and Sexuality, Studies of'
  ];

    /**
     * Create a new authentication controller instance.
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
    public function getIndex()
    {
        return view('users.index', ['users' => User::all()]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getShow($index)
    {
        return view('users.show', ['user' => User::find($index)]);
    }

    public function profile()
    {
        return view('users.show')->withUser(Auth::user());
    }

    public function settings()
    {
      return view('users.settings')->withUser(Auth::user())->withConcentrations($this->concentrations);
    }

    public function updateSettings(Request $request)
    {
      // Check if email has changed
      if (Auth::user()->email != $request->input('email'))
        if (User::where('email', $request->input('email'))->exists() ) // Check if email is associated with another account
          return redirect()->back()->withErrors(['email' => 'That email is associated with another account.']);

      Auth::user()->first = $request->input('first');
      Auth::user()->last = $request->input('last');
      Auth::user()->email = $request->input('email');
      Auth::user()->name = $request->input('first') . " " . $request->input('last');
      Auth::user()->save();

      Auth::user()->student->year = $request->input('year');
      Auth::user()->student->concentration = $request->input('concentration');
      Auth::user()->student->secondary = $request->input('secondary');
      Auth::user()->student->save();

      return redirect()->route('settings')->with('flash-message', 'Your settings have been updated.');


    }


}
