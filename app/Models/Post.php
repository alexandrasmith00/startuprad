<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use Slynova\Commentable\Traits\Commentable;

class Post extends Model
{
    use Commentable;

    protected $dates = ['published_at'];
    
    protected $fillable = [
        'title', 'content', 'user_id', 'idea_id',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        
        $new_value = str_slug($value);
        $increment = 1;
        
        while (DB::table('posts')->where('slug', $new_value)->exists())
        {
            $new_value = $new_value . "-" . $increment;
            $increment++;
        }

        if (! $this->exists)
          $this->attributes['slug'] = $new_value;

    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
