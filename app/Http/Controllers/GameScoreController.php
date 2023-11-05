<?php

namespace App\Http\Controllers;

use App\Models\GameScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameScoreController extends Controller
{
    public function updateScore(Request $request)
    {
        //---check login---
        if (!auth()->guard('subscriber')->check()) {
            return redirect()->route('home');
        }

        $game_score = $request->game;
        $game_id = $request->game_id;
        $user_id = Auth::guard('subscriber')->user()->id;
        $same_user =  GameScore::where('subscriber_id', $user_id)->where('tournament_game_id', $game_id)->first();
        if ($same_user) {
            $same_user->update([
                'score' => $same_user->score + $game_score
            ]);
        } else {
            GameScore::create([
                'subscriber_id' => $user_id,
                'tournament_game_id' => $game_id,
                'score' => $game_score,
            ]);
        }
    }
}
