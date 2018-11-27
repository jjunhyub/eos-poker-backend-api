<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
  public function getLatestGame(){
    $latest_game = Game::orderBy('created_at', 'desc')->first();
    return $latest_game;
  }
}
