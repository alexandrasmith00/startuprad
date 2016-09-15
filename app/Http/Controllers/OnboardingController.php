<?php namespace App\Http\Controllers;

// use these Illuminate files
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// use these Models
use App\Models\User, App\Models\Role;
use App\Models\Onboard\AccountSetup;
use App\Models\Applications\Applicant, App\Models\Applications\Application;
use App\Models\Checklist\Checklist, App\Models\Checklist\Todo;
use App\Models\Onboard\StudentSetup;
use App\Models\Idea;

use App\Events\StudentInvited;
use App\Events\TeamReturned;

// use these class Aliases
use Validator, Mail, Carbon\Carbon, Log;

// use these
use App\Http\Controllers\Controller;

class OnboardingController extends Controller
{
  use StudentSetup;

  /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
  public function __construct()
  {

  }

  public function returningStudentInvite()
  {
//    $idea = Idea::where('id', 12)->first();
  }

  public function sending()
  {
    $ids = [12, 21, 10, 17];

    $returning = Idea::whereIn('id', $ids)->get();

    foreach ($returning as $return)
      event (new TeamReturned($return));

    $applicants = Application::where('status', 'accepted')->get();
    foreach ($applicants as $app)
      foreach ($app->applicants as $applicant)
        event (new StudentInvited($applicant));
  }

  public function studentInvite()
  {
      $ids = [12, 21, 10, 17];

      $returning = Idea::whereIn('id', $ids)->get()->lists('name');
      $applicants = Application::where('status', 'accepted')->get()->lists('team');

      return redirect()->back()->with('invite-modal', [$applicants, $returning]);

//      return redirect()->back()->with('flash-message', $applicant->first . ' has been invited to join Startup RAD.');
  }

  // Check for valid confirmation code
  public function confirm($token)
  {
    $confirmation = AccountSetup::where('token', $token)->where('email', Input::get('email'))->first();

    if ($confirmation == null)
      return redirect()->route('feed')->with('flash-message', "Sorry! That confirmation code is invalid.");
    else if ($confirmation->created_at < Carbon::now()->subWeek())
      return redirect()->route('feed')->with('flash-message', "Sorry! That confirmation code has expired.");
    else { //  Valid confirmation
      $phone = User::where('email', Input::get('email'))->first()->phone;
      return view('onboard.account')->withEmail(Input::get('email'));
    }
  }

  // Function to create the user
  public function create($token, Request $request)
  {
      // Check for valid confirmation still
      $confirmation = AccountSetup::where('token', $token)->where('email', Input::get('email'))->first();

      // Set password for user
      $user = User::where('email', Input::get('email'))->first();
      $user->password = Hash::make($request->input('password'));
      $user->save();

      // Remove the confirmation from account setup
      $confirmation = AccountSetup::where('token', $token)->where('email', Input::get('email'))->delete();

      // Checklist: email confirmed
      foreach ($this->student_setup_zero as $description)
      {

        $confirm = Checklist::where('description', $description)->first()->id;
        $todo = Todo::where('user_id', $user->id)->where('checklist_id', $confirm)->update(['completed_at' => Carbon::now()]);
      }

      Auth::attempt(['email' => Input::get('email'), 'password' => $request->input('password')]);
      return redirect()->route('setup');
  }

  public function setup()
  {
      if (Auth::user()->isStudent() )
        return $this->get_student_step(Auth::user()->id);
  }


  public function submit_one(Request $request)
  {
    Input::merge(array_map('trim', Input::all()));

    // Add to user
    $user = User::where('id', Auth::user()->id)->update(['first' => $request->input('first'), 'last' => $request->input('last'), 'name' => $request->input('first') . " " . $request->input('last') ]);

    if (Auth::user()->hasLovedOne() ) // Update existing loved one
    {
      $caregiver = Auth::user()->caregiver;
      $caregiver->nickname = $request->input('nickname');
      $caregiver->save();
    }
    else // Create a new loved one
    {
      $role = Role::where('name', 'General')->where('type', 'Caregiver')->first()->id;

      $lovedone = LovedOne::create(['first' => $request->input('their-first'), 'last' => $request->input('their-last'), 'name' => $request->input('their-first') . " " . $request->input('their-last')]);

      $caregiver = Caregiver::create(['user_id' => Auth::user()->id, 'lovedone_id' => $lovedone->id, 'nickname' => $request->input('nickname'), 'role_id' => $role]);
    }

    // Update checklist
    $this->complete_step($this->step_one, Auth::user()->id);

    // TODO Add to activity

    return redirect()->route('setup');
  }

  public function submit_two(Request $request)
  {

    if ($request->input('others') == 'yes') {
      for ($i = 0; $i < $request->input('size'); $i++)
      {
        $findName = "first" . ($i + 1);
        $findPhone = "phone" . ($i + 1);

        if ($i == 0) {
          $findName = "first";
          $findPhone = "phone";
        }

        $was_invited = false;
        foreach (Auth::user()->caringfor()->caregivers as $carer) {
          if ($carer->user->phone == standardize_phone($request->input($findPhone) ) )
            $was_invited = true;
        }

        if (! ($was_invited) )
          event (new CaregiverAdded(Auth::user(), $request->input($findName), standardize_phone($request->input($findPhone))));
      }
    }

    // Complete checklist
    $this->complete_step($this->step_two, Auth::user()->id);

    // TODO Add to activity
    return redirect()->route('setup');
  }

  public function submit_three(Request $request)
  {
    $DOB = Carbon::createFromDate($request->input('year'), $request->input('month'), $request->input('day'));

    $lovedone = Auth::user()->caringfor();
    $lovedone->DOB = $DOB;
    $lovedone->gender = $request->input('gender');
    $lovedone->weight = $request->input('weight');
    $lovedone->save();

    // Complete checklist
    $this->complete_step($this->step_three, Auth::user()->id);

    // TODO Add to activity
    return redirect()->route('setup');

  }






}
