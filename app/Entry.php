<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public $fillable = [
        'game_id',
        'user_name',
        'made',
        'prize'
    ];
}
