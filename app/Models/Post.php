<?php

namespace App\Models;

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

        if (! $this->exists)
          $this->attributes['slug'] = str_slug($value);

    }
}
