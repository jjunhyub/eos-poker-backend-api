<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Card;

//여기서는 실질적인 움직임을 담당한다
class cardController extends Controller
{
<<<<<<< HEAD
    public function getCard(Request $request){
      $key=$request->input('key_account');
      $card=Card::where('id',$key)->first();
      return $card->made;
=======
    public function getCard(Request $request)
    {
        $key = $request->input('key');
        $card = Card::where('id', $key)->first();
        return $card->made;
>>>>>>> ac94ac2ad13d2a8ff9dc0d0b777daad19292736f
    }
}
