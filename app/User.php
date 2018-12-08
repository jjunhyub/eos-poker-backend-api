<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  public $table='users';
  public $timestamps=false;
  public $fillable=['id','eos_id', 'point'];
}
