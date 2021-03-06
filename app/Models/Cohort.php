<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{

    protected $table = 'cohorts';
    public $timestamps = false;
    protected $fillable = ['name'];


    /**
     * Get the users in a cohort
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'cohorts_users');
    }


    /**
     * Get the ideas in a cohort
     */
    public function ideas()
    {
        return $this->belongsToMany('App\Models\Idea', 'cohorts_ideas');
    }



}
