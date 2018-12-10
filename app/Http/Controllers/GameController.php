<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
  public function getGameLogs(){
    return Game::where('winner_name', '!=', '')->orderBy('id', 'desc')->take(24)->get();
  }
}
