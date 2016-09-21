<?php namespace App\Models\Onboard;

use Illuminate\Http\Request;
use App\Models\Checklist\Checklist, App\Models\Checklist\Todo;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User, App\Models\TeamUser;

trait StudentSetup
{

  public $student_setup_zero = ['Confirm email address', 'Create a password'];
  public $student_step_one = ['Add profile picture'];
  public $student_step_two = ['Add company role'];

  protected function check_completed($user_id)
  {
    // Make sure that the steps exist; i.e. for previous users
    foreach ($this->student_setup_zero as $description)
    {
      $checklists = Checklist::where('description', $description)->where('internal', 'student-onboarding')->get();
      foreach ($checklists as $check)
        if (!(Todo::where('user_id', $user_id)->where('checklist_id', $check->id)->exists()))
          Todo::create(['user_id' => $user_id, 'checklist_id' => $check->id, 'completed_at' => Carbon::now() ]);
    }

    // Look for profile picture
    $check  = Checklist::where('description', 'Add profile picture')->where('internal', 'student-onboarding')->first();

    // If doesnt exist, add a todo
    if (! (Todo::where('user_id', $user_id)->where('checklist_id', $check->id)->exists() ))
      Todo::create(['user_id' => $user_id, 'checklist_id' => $check->id ]);

    // If already have profile picture, update todo
    if (User::where('id', $user_id)->first()->profile_picture != '') {
      Todo::where('user_id', $user_id)->where('checklist_id', $check->id)->update(['completed_at' => Carbon::now() ]);
    }

    // Look for company role
    $check = Checklist::where('description', 'Add company role')->where('internal', 'student-onboarding')->first();

    // If doesnt exist, add a todo
    if (! (Todo::where('user_id', $user_id)->where('checklist_id', $check->id)->exists() ))
      Todo::create(['user_id' => $user_id, 'checklist_id' => $check->id ]);

    // If already have company role, update todo
    $user = User::find($user_id);
    if (TeamUser::where('user_id', $user->id)->where('team_id', $user->idea->team->id)->first()->company_role != '') {
      Todo::where('user_id', $user_id)->where('checklist_id', $check->id)->update(['completed_at' => Carbon::now() ]);
    }


  }

  protected function get_student_step($user_id)
  {

    $this->check_completed($user_id);

    // Current step
    $step = 0;
    $step_one = $this->student_step_one;
    $step_two = $this->student_step_two;

    // Check if step 1 is done yet
    if (! ($this->check_student_step($step_one, $user_id)))
      return $this->student_step_one();

    // Check if step 2 is done yet
    if (! ($this->check_student_step($step_two, $user_id)))
      return $this->student_step_two();

    // Completed and redirect to dashboard
    return redirect()->route('dashboard');
  }

  protected function check_student_step($descriptions, $user_id)
  {
    $step_completed = true;
    foreach ($descriptions as $description)
    {
      $checklist = Checklist::where('description', $description)->where('internal', 'student-onboarding')->first();
      if (! (Todo::where('checklist_id', $checklist->id)->where('user_id', $user_id)->where('completed_at', '!=', null)->exists()))
        $step_completed = false;
    }

    return $step_completed;
  }

  protected function complete_student_step($descriptions, $user_id)
  {
    foreach ($descriptions as $description)
    {
      $checklist = Checklist::where('description', $description)->where('internal', 'student-onboarding')->first();

      Todo::where('checklist_id', $checklist->id)->where('user_id', $user_id)->update(['completed_at' => Carbon::now()]);
    }
  }

  protected function student_step_one()
  {
    return view('onboard.picture');
  }

  protected function student_step_two()
  {
    return view('onboard.role');
  }

  protected function student_submit_one(Request $request)
  {
    $user = User::where('id', Auth::user()->id)->update(['profile_picture' => $request->input('cropped-profile-picture') ]);
    $this->complete_student_step($this->student_step_one, Auth::user()->id);
    return redirect()->route('setup');
  }

  protected function student_submit_two(Request $request)
  {
    $role = TeamUser::where('user_id', Auth::user()->id)->where('team_id', Auth::user()->team()->id)->update(['company_role' => $request->input('role')]);
    $this->complete_student_step($this->student_step_two, Auth::user()->id);
    return redirect()->route('setup');
  }

}
