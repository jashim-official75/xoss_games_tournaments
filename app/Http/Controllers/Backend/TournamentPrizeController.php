<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\GamePrize;
use App\Models\Backend\TournamentGame;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TournamentPrizeController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'prize_name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp',
            'position' => 'required|numeric',
        ]);
        $game_prize = new GamePrize();
        $game_prize->tournament_game_id = $request->game_id;
        $game_prize->prize_name = $request->prize_name;
        $game_prize->slug = Str::slug($request->prize_name);
        $game_prize->position = $request->position;
        if ($request->hasFile('image')) {
            $image = Str::slug($request->prize_name) . '.' . $request->file('image')->getClientOriginalExtension();
            $path = "uploads/Tournamant/GamePrize/" . $image;
            $request->file('image')->move(public_path('uploads/Tournamant/GamePrize'), $image);
            $game_prize->image = $path;
        }
        $game_prize->save();
        return redirect()->back()->with('success', 'Game Prize Added Successfully!');
    }

    public function show($id)
    {
        $game = TournamentGame::findOrFail($id);
        $prizes = GamePrize::latest()->where('tournament_game_id', $game->id)->get();
        return view('backend.pages.tournament.game_prize.index', [
            'game' => $game,
            'prizes' => $prizes,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game_prize = GamePrize::findOrfail($id);
        return view('backend.pages.tournament.game_prize.edit', [
            'game_prize' => $game_prize,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
