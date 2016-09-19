<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User, App\Models\Social;


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


    public function wolfe()
    {
      if (Auth::user()->hasRole('Admin')) {
        $user = User::find(24);
        Auth::login($user);
      }
    }
    public function verg()
    {
      if (Auth::user()->hasRole('Admin')) {
        $user = User::find(6);
        Auth::login($user);
      }
    }
    public function paul()
    {
      if (Auth::user()->hasRole('Admin')) {
        $user = User::find(41);
        Auth::login($user);
      }


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

    public function profile($id)
    {
      $user = User::where('id', $id)->first();
      return view('users.profile')->withUser($user);
    }

    public function myProfile()
    {
        return view('users.profile')->withUser(Auth::user());
    }

    public function settings()
    {
      return view('users.settings')->withUser(Auth::user())->withConcentrations($this->concentrations);
    }

    public function updateSettings(Request $request)
    {
      // Check if email has changed
      if (Auth::user()->email != $request->input('email'))
        if (User::where('email', $request->input('email'))->exists() ) { // Check if email is associated with another account
          $errors['email'] = 'The email is already associated with another account.';
          return redirect()->back()->withErrors($errors)->withInput();
        }

      Auth::user()->first = $request->input('first');
      Auth::user()->last = $request->input('last');
      Auth::user()->email = $request->input('email');
      Auth::user()->name = $request->input('first') . " " . $request->input('last');
      Auth::user()->save();

      if (Auth::user()->student) {
          Auth::user()->student->year = $request->input('year');
          Auth::user()->student->concentration = $request->input('concentration');
          Auth::user()->student->secondary = $request->input('secondary');
          Auth::user()->student->save();
      }


      if (Auth::user()->social == null) {
        Auth::user()->social = new Social;
        Auth::user()->social->user_id = Auth::user()->id;
      }

      Auth::user()->social->facebook = $request->input('facebook');
      Auth::user()->social->twitter = $request->input('twitter');
      Auth::user()->social->linkedin = $request->input('linkedin');
      Auth::user()->social->save();

      return redirect()->route('settings')->with('flash-message', 'Your settings have been updated.');
    }

    public function password()
    {
      return view('users.password')->withUser(Auth::user());

    }

    public function updatePassword(Request $request)
    {
      if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->input('password') ]))
      {
        $user = Auth::user();
        $user->password = bcrypt($request->input('new_password'));
        $user->save();

        Auth::login(Auth::user());
        return redirect()->back()->with('flash-message', "You successfully reset your password.")->with('flash-strong', 'Success!')->withUser(Auth::user());
      }

      $errors = ['password' => 'This is not the correct password.'];

      return redirect()->back()->withUser(Auth::user())->withErrors($errors);
    }


}
