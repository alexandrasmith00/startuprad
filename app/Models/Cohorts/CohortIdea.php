<?php

namespace App\Models\Cohorts;

use Illuminate\Database\Eloquent\Model;

class CohortIdea extends Model
{
  protected $table = 'cohorts_ideas';
  public $timestamps = false;
  protected $fillable = ['cohort_id', 'idea_id'];
}
