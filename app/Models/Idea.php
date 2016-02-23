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
        return $this->belongsTo('App\Models\Team', 'team_ideas');
    }

    public function thinkings()
    {
        return $this->hasMany('App\Models\Thinking');
    }
   

}
