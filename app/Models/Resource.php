<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'descriptor', 'value', 'thinking_id'
    ];
}
