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
  /*
  public function getGames(){
    //return how many games : 24;(12h)
    $games = array();
    for ($=0; $i<=10; $++) {
      $games[] = Game::orderBy('created_at', 'desc')->$;
      //그냥 마지막 인덱스에 있는 테이블을 가져오자. order할 필요도 없다. 이미 순서대로 저장되어있기 때문에 위에도 마찬가지.
    }
    return $games;
  }*/
}
