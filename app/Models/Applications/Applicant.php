<?php namespace App\Models\Applications;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
  protected $table = 'applicants';
  public $timestamps = false;
  protected $fillable = [
    'application',
    'first',
    'last',
    'email',
    'year',
    'concentration',
    'secondary',
    'resume'
  ];



  public function application()
  {
    return $this->belongsTo('App\Models\Applications\Application', 'application');
  }

}
