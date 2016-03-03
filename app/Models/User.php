<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;


class User extends Authenticatable
{
    use Billable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first', 'last', 'email', 'password',
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
    
    public function idea()
    {
        return $this->belongsTo('App\Models\Idea', 'idea_id');
    }
    
    public function cohorts()
    {
        return $this->belongsToMany('App\Models\Cohort', 'cohorts_users');
    }
    
    public function sharesCohort($other_user_id)
    {
        
    }
    
    public function hasProject($check)
    {
        $projects = [];
        foreach ($this->teams as $team)
            foreach ($team->idea as $idea)
                array_push($projects, $idea->id);
        return in_array($check, $projects);
    }
    
    
    /**
     * Find out if a user has a certain role
     *
     * $return boolean
     */
    public function hasRole($check)
    {
        return in_array($check, array_fetch($this->roles->toArray(), 'name'));
    }
    
 
}
