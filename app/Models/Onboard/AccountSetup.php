<?php namespace App\Models\Onboard;

use Illuminate\Database\Eloquent\Model;

class AccountSetup extends Model
{

  protected $table = 'account_setups';

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
  protected $fillable = [ 'email', 'token', 'created_at'];

  protected $primaryKey = 'email';

}
