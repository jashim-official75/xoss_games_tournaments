<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\GamePrize;
use App\Models\Backend\TournamentGame;
use App\Models\Frontend\TournamentPaymentDetails;
use App\Models\GameScore;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class TournamentController extends Controller
{
    //--game_details
    public function game_details($slug)
    {
        //---check login---
        if (!auth()->guard('subscriber')->check()) {
            return redirect()->route('home');
        }
        $subscriber_id = Auth::guard('subscriber')->user()->id;
        $game = TournamentGame::where('slug', $slug)->first();
        $tournament_game_id = $game->id;
        $fist_score = GameScore::where('tournament_game_id', $game->id)->orderByDesc('score')->first();
        $second_score = GameScore::where('tournament_game_id', $game->id)->orderByDesc('score')->offset(1)->first();
        $third_score = GameScore::where('tournament_game_id', $game->id)->orderByDesc('score')->offset(2)->first();
        $allgamescore = GameScore::where('tournament_game_id', $game->id)->orderByDesc('score')->get();
        $gamescore = GameScore::where('tournament_game_id', $game->id)->orderByDesc('score')->take(20)->get();
        $my_score_details = GameScore::where('tournament_game_id', $game->id)->where('subscriber_id', $subscriber_id)->first();

        $myScore = 0;
        $myIndex = 0;
        foreach ($allgamescore as $index => $score) {
            if ($score->subscriber_id === $subscriber_id) {
                $myScore = $score->score;
                $myIndex = $index + 1; // Adding 1 to convert index to human-readable form
                break;
            }
        }
        $gamescores = $gamescore->splice(3);
        $check_payment = TournamentPaymentDetails::where('subscriber_id', $subscriber_id)->where('tournament_game_id', $tournament_game_id)->where('customer_reference', '!=', null)->first();
        if ($check_payment) {
            $subscriber = 1;
        } else {
            $subscriber = 0;
        }
        return view('frontend.tournament.game-details', [
            'game' => $game,
            'fist_score' => $fist_score,
            'second_score' => $second_score,
            'third_score' => $third_score,
            'gamescores' => $gamescores,
            'my_score_details' => $my_score_details,
            'myIndex' => $myIndex,
            'myScore' => $myScore,
            'subscriber' => $subscriber,
            'allgamescore' => $allgamescore,
        ]);
    }
    //--gamePlay
    public function gamePlay($slug)
    {
        //---check login---
        if (!auth()->guard('subscriber')->check()) {
            return redirect()->route('home');
        }
        $game = TournamentGame::where('slug', $slug)->first();
        $check_payment = TournamentPaymentDetails::where('subscriber_id', auth()->guard('subscriber')->user()->id)->where('tournament_game_id', $game->id)->where('customer_reference', '!=', null)->first();
        if (!$check_payment) {
            return redirect()->route('home');
        }
        return view('frontend.tournament.game-play', [
            'game' => $game,
        ]);
    }
    //---game_prize
    public function game_prize($slug)
    {
        //---check login---
        if (!auth()->guard('subscriber')->check()) {
            return redirect()->route('home');
        }
        $game = TournamentGame::where('slug', $slug)->first();
        $first_prize = GamePrize::byRank(1, $game->id)->first();
        $second_prize = GamePrize::byRank(2, $game->id)->first();
        $third_prize = GamePrize::byRank(3, $game->id)->first();
        return view('frontend.tournament.game_prize', [
            'first_prize' => $first_prize,
            'second_prize' => $second_prize,
            'third_prize' => $third_prize,
        ]);
    }
}
