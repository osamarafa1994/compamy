<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $dates = ['deleted_at'];

    protected $fillable = [
      'name',
      'tel',
      'email',
      'address'
    ];

}
