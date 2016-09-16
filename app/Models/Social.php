<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
  protected $table = 'socials';
  public $timestamps = false;
  protected $fillable = ['user_id', 'facebook', 'twitter', 'linkedin', 'phone'];
  protected $primaryKey = 'user_id';

}
