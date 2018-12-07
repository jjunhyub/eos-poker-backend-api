<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  public $table='card';
  public $timestamps=false;
  public $fillable=['id','made'];
}
