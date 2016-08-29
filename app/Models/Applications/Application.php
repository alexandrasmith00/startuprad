<?php namespace App\Models\Applications;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  protected $table = 'applications';
  public $timestamps = true;
  protected $fillable = [ 'team', 'description', 'url', 'video'];
}
