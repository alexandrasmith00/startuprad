<?php

namespace App\Models\Roles;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
  public $timestamps = false;
  protected $table = 'users_roles';
  protected $fillable = ['user_id', 'role_id'];
}
