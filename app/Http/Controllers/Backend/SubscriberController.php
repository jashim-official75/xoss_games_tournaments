<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\TournamentGame;
use App\Models\Frontend\TournamentPaymentDetails;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    //--front user
    public function user()
    {
        $users = Subscriber::latest()->get();
        return view('backend.pages.front.user', compact('users'));
    }
    //--tournamant_perticipation
    public function tournamant_perticipation()
    {
        $perticipations = TournamentPaymentDetails::latest()->with('Subscriber', 'TournamentGame')->get();
        $perticipation_count = TournamentPaymentDetails::latest()->with('Subscriber', 'TournamentGame')->count();
        return view('backend.pages.front.participation', compact('perticipations', 'perticipation_count'));
    }
    //--currentGame_perticipation
    public function currentGame_perticipation($id)
    {
        $game = TournamentGame::findOrFail($id);
        $participations = TournamentPaymentDetails::where('tournament_game_id', $id)->latest()->get();
        $participation_count = TournamentPaymentDetails::where('tournament_game_id', $id)->count();
        $total_amount = TournamentPaymentDetails::where('tournament_game_id', $id)->sum('amount');
        return view('backend.pages.front.current_game_based_participation', compact('game', 'participations', 'participation_count', 'total_amount'));
    }
}
