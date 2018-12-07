<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Card;

//여기서는 실질적인 움직임을 담당한다
class cardController extends Controller
{
    public function getCard(Request $request)
    {
        $key = $request->input('key');
        $card = Card::where('id', $key)->first();
        return $card->made;
    }
}
