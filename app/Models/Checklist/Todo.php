<?php namespace App\Models\Checklist;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

  protected $table = 'todos';

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
  protected $fillable = [ 'user_id', 'checklist_id', 'completed_at' ];

}
