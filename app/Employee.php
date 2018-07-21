<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'name',
      'phone',
      'role_id',
      'email',
      'address',
      'password'
    ];
}
