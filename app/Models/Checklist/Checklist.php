<?php namespace App\Models\Checklist;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{

  protected $table = 'checklists';

  /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
  public $timestamps = false;

  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $fillable = [ 'description', 'completed', 'internal' ];

}
