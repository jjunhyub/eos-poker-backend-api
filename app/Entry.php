<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public $fillable = [
        'gameId',
        'userId',
        'made',
    ];
}
