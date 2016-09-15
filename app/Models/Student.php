<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = 'students';
  public $timestamps = false;
  protected $fillable = ['user_id', 'year', 'concentration', 'secondary', 'resume'];
  protected $primaryKey = 'user_id';

}
