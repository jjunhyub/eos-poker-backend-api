<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Entry;

class EntryController extends Controller
{
    public function getEntry(Request $request)
    {
        $user_name = $request->input('user_name');
        $game_id = $request->input('game_id');

        $entry = Entry::where('game_id', $game_id)->where('user_name', $user_name)->first();
        if ($entry) {
            return [
                'result' => true,
                'point' => $entry->prize,
                'made' => Card::find($entry->made)->made,
                'made_id'=>$entry->made
            ];
        }
        return [
            'result' => false
        ];
    }
}
