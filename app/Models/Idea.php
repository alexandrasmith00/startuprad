<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User, App\Models\Roles\UserRole, App\Models\Role;

class Idea extends Model
{

    protected $table = 'ideas';
    public $timestamps = false;

    protected $fillable = [
      'name', 'logo', 'application'
    ];

    /**
     * Get the team from an idea
     */
    public function team()
    {
        return $this->hasOne('App\Models\Team');
    }
//    public function people()
//    {
//        return $this->hasManyThrough('App\Models\Team', 'App\Models\User');
//    }

    public function thinkings()
    {
        return $this->hasMany('App\Models\Thinking');
    }


    public function instructor()
    {
        $instructor = Role::where('name', 'Professor')->first();
        $users = UserRole::where('role_id', $instructor->id)->lists('user_id');
        return User::whereIn('id', $users)->get();
    }

    public function TFs()
    {
      $instructor = Role::where('name', 'TF')->first();
      $users = UserRole::where('role_id', $instructor->id)->lists('user_id');
      return User::whereIn('id', $users)->get();
    }


    public function facebook()
    {
        $thinking = Thinking::where('idea_id', $this->id)->where('current', '1')->where('name', 'facebook')->first();

        if ($thinking != null)
          return Resource::where('thinking_id', $thinking)->first()->value;
    }

    public function linkedin()
    {
      $thinking = Thinking::where('idea_id', $this->id)->where('current', '1')->where('name', 'linkedIn')->first();

      if ($thinking != null)
        return Resource::where('thinking_id', $thinking)->first()->value;
    }

    public function twitter()
    {
      $thinking = Thinking::where('idea_id', $this->id)->where('current', '1')->where('name', 'twitter')->first();

      if ($thinking != null)
        return Resource::where('thinking_id', $thinking)->first()->value;
    }




}
