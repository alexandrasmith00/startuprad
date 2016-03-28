<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{

    protected $table = 'ideas';
    public $timestamps = false;

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
   
    
   

}
