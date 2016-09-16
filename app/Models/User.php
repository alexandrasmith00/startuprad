<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;
use App\Models\Checklist\Checklist, App\Models\Checklist\Todo;
use App\Models\TeamUser;
class User extends Authenticatable
{
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first', 'last', 'email', 'password', 'name', 'applicant', 'profile_picture'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the roles a user has
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'users_roles');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Models\Team', 'teams_users');
    }


    public function team()
    {
      return $this->teams->first();
    }

    public function social()
    {
      return $this->hasOne('App\Models\Social', 'user_id');
    }

    public function student()
    {
      return $this->hasOne('App\Models\Student', 'user_id');
    }

    public function idea()
    {
        return $this->belongsTo('App\Models\Idea', 'idea_id');
    }

    public function cohorts()
    {
        return $this->belongsToMany('App\Models\Cohort', 'cohorts_users');
    }

    public function cohortTeams()
    {
        $teams = [];
        foreach ($this->cohorts as $cohort)
          foreach($cohort->ideas as $idea)
            array_push($teams, $idea->id);

        return $teams;
    }

    public function companyRole()
    {
        return TeamUser::where('user_id', $this->id)->where('team_id', $this->team()->id)->first()->company_role;
    }

    public function sharesCohort($other_user_id)
    {

    }

    public function hasProject($check)
    {
        $projects = [];
        foreach ($this->teams as $team)
                array_push($projects, $team->idea->id);
        return in_array($check, $projects);
    }


    /**
     * Find out if a user has a certain role
     *
     * $return boolean
     */
    public function hasRole($check)
    {
        return in_array($check, array_pluck($this->roles->toArray(), 'name'));
    }

    public function isStaff()
    {
        if ($this->hasRole("TF") || $this->hasRole("Professor") || $this->hasRole("Admin"))
          return true;

        return false;
    }

    public function isStudent()
    {
      if ($this->hasRole("Student"))
        return true;

      return false;
    }

    public function onboarded()
    {
        $completed = true;

        $checklists = [];
        if ($this->hasRole("Student"))
            $checklists = Checklist::where('internal', 'student-onboarding')->get();

        if ($this->hasRole("TF"))
          $checklists = Checklist::where('internal', 'tf-onboarding')->get();

        if ($this->hasRole("Admin"))
          $checklists = Checklist::where('internal', 'admin-onboarding')->get();

        if ($this->hasRole("Advisor"))
          $checklists = Checklist::where('internal', 'advisor-onboarding')->get();

        foreach ($checklists as $checklist)
          if (! (Todo::where('checklist_id', $checklist->id)->where('user_id', $this->id)->where('completed_at', '!=', null)->exists()))
            $completed = false;

        return $completed;
    }

}
