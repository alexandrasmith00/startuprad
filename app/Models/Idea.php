<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User, App\Models\Roles\UserRole, App\Models\Role;
use Log;
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

    public function linkedin() { return $this->singleResource('linkedIn'); }
    public function facebook() { return $this->singleResource('facebook'); }
    public function twitter() { return $this->singleResource('twitter'); }
    public function url() { return $this->singleResource('site'); }
    public function tagline() { return $this->singleResource('tagline'); }
    public function logo() { return $this->singleResource('logo'); }
    public function location() { return $this->singleResource('location'); }
    public function description() { return $this->singleResource('description'); }
    public function customer() { return $this->singleResource('customer'); }
    public function demands() { return $this->singleResource('demands'); }
    public function product() { return $this->singleResource('product'); }
    public function value() { return $this->singleResource('value'); }
    public function useCase() { return $this->singleResource('useCase'); }
    public function market() { return $this->singleResource('market'); }
    public function competition() { return $this->singleResource('competition'); }
    public function marketing() { return $this->singleResource('marketing'); }
    public function businessModel() { return $this->singleResource('businessModel'); }
    public function video() { return $this->singleResource('video'); }
    public function partnerships() { return $this->multiResource('partnership'); }

    protected function singleResource($name)
    {
      $thinking = Thinking::where('idea_id', $this->id)->where('current', '1')->where('name', $name)->first();
      if ($thinking != null)
        return Resource::where('thinking_id', $thinking->id)->first()->value;
    }

    protected function multiResource($name)
    {
      $thinking = Thinking::where('idea_id', $this->id)->where('current', '1')->where('name', $name)->get()->lists('id');

      if ($thinking != null) {
        $resources = Resource::whereIn('thinking_id', $thinking)->get();
        return $resources->groupBy('thinking_id');
      }
    }
}
