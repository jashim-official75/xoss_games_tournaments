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
    //--tournament_rules
    public function tournament_rules()
    {
        return view('frontend.pages.rules');
    }
    //--tournament_faq
    public function tournament_faq()
    {
        return view('frontend.pages.faq');
    }
    //--tournament_support
    public function tournament_support()
    {
        return view('frontend.pages.support');
    }
}
