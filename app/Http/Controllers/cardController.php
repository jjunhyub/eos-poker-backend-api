<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Card;
class cardController extends Controller
{
    public function getCard(Request $request){
      $key=$request->input('key_account');
      $card=Card::where('id',$key)->first();
      return $card->made;
    }
}
