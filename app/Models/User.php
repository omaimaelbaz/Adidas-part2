<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;


class User extends Model
{
    use HasFactory;

  protected $fillable = [
    'name',
    'email',
    'password',
    'role_id'
  ];
  public function role()
  {
      return $this->belongsTo(Role::class);
  }

}
