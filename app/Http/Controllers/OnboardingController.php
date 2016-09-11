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
use App\Models\Checklist\Checklist, App\Models\Checklist\Todo;

// use these class Aliases
use Validator, Mail, Carbon;

// use these
use App\Http\Controllers\Controller;

class OnboardingController extends Controller
{

  public $step_one = ['Add your name'];
  public $step_two = ['Attach accounts'];
  public $step_three = ['Show stuff'];


  /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
  public function __construct()
  {
  }

  public function start()
  {
    return view('onboard.phone');
  }

  public function confirm($token)
  {
    $confirmation = AccountSetup::where('token', $token)->where('email', Input::get('email'))->first();

    if ($confirmation == null)
      return 'sorry not valid, signup here';
    else if ($confirmation->created_at < Carbon::now()->subWeek())
      return 'that expiered. send it again and check yo email.. should we have them enter phone # and email??';
    else
      return $this->valid_confirm(Input::get('email'));
  }

  protected function valid_confirm($email)
  {
    $phone = User::where('email', $email)->first()->phone;
    return view('onboard.account')->withEmail($email)->withPhone(phone_display($phone));
  }

  public function create($token, Request $request)
  {
    if ($request->input('agreement') == 'on')
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
      $confirm = Checklist::where('description', 'Confirm your email')->first()->id;
      $todo = Todo::where('user_id', $user->id)->where('checklist_id', $confirm)->update(['completed_at' => Carbon::now()]);

      // TODO: Add to activity

      Auth::attempt(['email' => Input::get('email'), 'password' => $request->input('password')]);
      return redirect()->route('setup');
    }
    else
      return redirect()->back();
  }

  public function setup()
  {
    return $this->get_step(Auth::user()->id);
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

  protected function get_step($user_id)
  {
    // Current step
    $step = 0;
    $step_one = $this->step_one;
    $step_two = $this->step_two;
    $step_three = $this->step_three;

    // Check if step 1 is done yet
    if (! ($this->check_step($step_one, $user_id)))
      return $this->step_one();

    // Check if step 2 is done yet
    if (! ($this->check_step($step_two, $user_id)))
      return $this->step_two();

    // Check if step 3 is done yet
    if (! ($this->check_step($step_three, $user_id)))
      return $this->step_three();

    // Completed and redirect to dashboard
    return redirect()->route('dashboard');

  }

  protected function check_step($descriptions, $user_id)
  {
    $step_completed = true;
    foreach ($descriptions as $description)
    {
      $checklist = Checklist::where('description', $description)->first();
      if (! (Todo::where('checklist_id', $checklist->id)->where('user_id', $user_id)->where('completed_at', '!=', null)->exists()))
        $step_completed = false;
    }

    return $step_completed;
  }

  protected function complete_step($descriptions, $user_id)
  {
    foreach ($descriptions as $description)
    {
      $checklist = Checklist::where('description', $description)->first();

      Todo::where('checklist_id', $checklist->id)->where('user_id', $user_id)->update(['completed_at' => Carbon::now()]);
    }

  }

  protected function step_one()
  {
    $their_first = $their_last = $nickname = '';
    if (Auth::user()->hasLovedOne())
    {
      $their_first = Auth::user()->caringfor()->first;
      $their_last = Auth::user()->caringfor()->last;
      $nickname = Auth::user()->caregiver->nickname;
    }

    return view('onboard.names')->withFirst(Auth::user()->first)->withLast(Auth::user()->last)->withTheirFirst($their_first)->withTheirLast($their_last)->withNickname($nickname);
  }

  protected function step_two()
  {
    return view('onboard.others')->withLovedone(Auth::user()->caringfor()->first);
  }

  protected function step_three()
  {

    return view('onboard.illness')->withLovedone(Auth::user()->caringfor());
  }

}
