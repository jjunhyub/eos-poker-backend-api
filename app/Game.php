<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $fillable = [
        'id',
        'winner_name',
        'winner_made',
        'prize',
        'is_gaming'
    ];
}
