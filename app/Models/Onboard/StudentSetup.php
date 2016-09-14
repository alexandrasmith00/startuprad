<?php namespace App\Models\Onboard;

use Illuminate\Http\Request;
use App\Models\Checklist\Checklist, App\Models\Checklist\Todo;
use Illuminate\Support\Facades\Auth;


trait StudentSetup
{

  public $student_setup_zero = ['Confirm email address', 'Create a password'];
  public $student_step_one = ['Add profile picture'];
  public $student_step_two = ['Add company role'];

  protected function get_student_step($user_id)
  {
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
    return view('onboard.others')->withLovedone(Auth::user()->caringfor()->first);
  }

  protected function student_submit_one()
  {
    dd('hey');
  }





}
