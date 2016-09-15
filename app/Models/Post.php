<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use Slynova\Commentable\Traits\Commentable;
use Conner\Tagging\Taggable;
use App\Models\Comment;

class Post extends Model
{
    use Taggable;

    protected $dates = ['published_at'];

    protected $fillable = [
        'title', 'content', 'user_id', 'idea_id'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        $core = str_slug($value);
        $new_value = str_slug($value);
        $increment = 1;

        while (DB::table('posts')->where('slug', $new_value)->exists())
        {
            $new_value = $core . "-" . $increment;
            $increment++;
        }

        if (! $this->exists)
          $this->attributes['slug'] = $new_value;

    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function idea()
    {
        return $this->belongsTo('App\Models\Idea', 'idea_id');
    }

    public function comments()
    {
      return $this->morphMany(Comment::class, 'commentable');
    }


}


