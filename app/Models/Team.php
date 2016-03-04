<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    public $timestamps = false;

    /**
     * Get the roles a user has
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'teams_users');
    }
    
    /**
     * Get the ideas a team has
     */
    public function idea()
    {
        return $this->belongsTo('App\Models\Idea');
    }

 
}
