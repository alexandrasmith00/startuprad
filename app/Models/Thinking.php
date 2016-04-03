<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thinking extends Model
{
     protected $table = 'thinkings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'current', 'category_id', 'idea_id', 'name', 'name_view'
    ];

    /**
     * Get the category of a thinking
     */
    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    
    public function idea()
    {
        return $this->belongsToMany('App\Models\Idea');
    }
    
    public function resources()
    {
        return $this->hasMany('App\Models\Resource', 'thinking_id');
    }
    
    /**
     * Find out if a user has a certain role
     *
     * $return boolean
     */
    public function hasDatatype($check)
    {
        return in_array($check, array_fetch($this->category, 'dataType'));
    }
    
    public function hasCategory($check)
    {
        return in_array($check, array_fetch($this->category, 'name'));
    }
    
    
    
    
 
}
