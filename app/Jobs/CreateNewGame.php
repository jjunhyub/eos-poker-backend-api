<?php

namespace App\Jobs;

use App\Card;
use App\Entry;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Game;

class CreateNewGame implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $latest_game = Game::all()->last();
        $latest_game->is_gaming = false;

        $winner = Entry::where('game_id', $latest_game->id)->orderBy('made', 'desc')->first();
        if ($winner) {
            $latest_game->winner_id = $winner->user_id;
            $latest_game->winner_made = Card::find($winner->made)->made;
        }
        $latest_game->save();

        $new_game = Game::create(['prize' => 0]);
        $new_game->is_gaming = true;
        if ($latest_game) {
          $new_game->prize = $latest_game->prize > 1 ? $latest_game->prize * 0.1 : 0;
        }
        $new_game->save();
    }
}
