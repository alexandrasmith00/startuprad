<?php

namespace App\Models\Cohorts;

use Illuminate\Database\Eloquent\Model;

class CohortUser extends Model
{
  protected $table = 'cohorts_users';
  public $timestamps = false;
  protected $fillable = ['cohort_id', 'user_id'];
}
