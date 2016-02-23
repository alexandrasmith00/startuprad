<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Set timestamps off
     */
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

  
    /**
     * Get users with a certain role
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'users_roles');
    }
}
