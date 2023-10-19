<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\TournamentGame;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //--index
    public function index()
    {
        $games = TournamentGame::latest()->get();
        return view('frontend.tournament.index', [
            'games' => $games,
        ]);
    }

    public function tournament()
    {
        
    }
}
