<?php

namespace App\Http\Controllers;

use App\Entry;
use App\Game;
use App\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Card;

class cardController extends Controller
{
    public function getCard(Request $request){
        $game_id = $request->input('game_id');
        $user_name = $request->input('user_name');

        $user = User::where('eos_id', $user_name)->first();

        if ($user->point < 1) {
            return 'LackPoint';
        }
        $user->point --;
        $user->save();

        $made = $request->input('made');
        $card = Card::find($made);

        $entry = Entry::where('game_id', $game_id)->where('user_name', $user_name)->first();
        if ($entry) {
            $entry->made = $made;
            $entry->prize += 1;
        }
        else {
            $entry = Entry::create([
                'game_id' => $game_id,
                'user_name' => $user_name,
                'made' => $made,
                'prize' => 1
            ]);
        }
        $entry->save();

        $game = Game::find($game_id);
        $game->prize += 1;
        $game->save();
        return $card->made;
    }
}
