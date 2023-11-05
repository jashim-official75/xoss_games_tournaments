<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\GamePrize;
use App\Models\Backend\TournamentGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $game_id = $request->game_id;
        $same_position_same_game = GamePrize::where('tournament_game_id', $game_id)
            ->where('position', $request->position)
            ->first();
        if ($same_position_same_game) {
            return redirect()->back()->with('error', 'This Position is Already Exists!');
        }
        $game_prize = new GamePrize();
        $game_prize->tournament_game_id = $game_id;
        $game_prize->prize_name = $request->prize_name;
        $game_prize->slug = Str::slug($request->prize_name);
        $game_prize->position = $request->position;
        if ($request->hasFile('image')) {
            $image = 'game_id_' . $game_id . '-' . uniqid() . '-' . Str::slug($request->prize_name) . '.' . $request->file('image')->getClientOriginalExtension();
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'prize_name' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,webp',
            'position' => 'required|numeric',
        ]);
        $game_prize = GamePrize::findOrFail($id);
        $same_position_same_game = GamePrize::where('tournament_game_id', $game_prize->tournament_game_id)
            ->where('position', $request->position)
            ->where('position', '!=', $game_prize->position)
            ->first();
        if ($same_position_same_game) {
            return redirect()->back()->with('error', 'This Position is Already Exists!');
        }
        $game_prize->prize_name = $request->prize_name;
        $game_prize->slug = Str::slug($request->prize_name);
        $game_prize->position = $request->position;
        if ($request->hasFile('image')) {
            if ($game_prize->image) {
                File::delete(public_path($game_prize->image));
            }
            $image = 'game_id_' . $game_prize->tournament_game_id . '-' . uniqid() . '-' . Str::slug($request->prize_name) . '.' . $request->file('image')->getClientOriginalExtension();
            $path = "uploads/Tournamant/GamePrize/" . $image;
            $request->file('image')->move(public_path('uploads/Tournamant/GamePrize'), $image);
            $game_prize->image = $path;
        }
        $game_prize->save();
        return redirect()->back()->with('success', 'Game Prize Updated Successfully!');
    }
    public function destroy($id)
    {
        $game_prize = GamePrize::findOrFail($id);
        if($game_prize->image){
            File::delete(public_path($game_prize->image));
            $game_prize->delete();
            return redirect()->back()->with('success', 'Game Prize Deleted Successfully!');
        }
    }

    public function change_status($id)
    {
        $game_prize = GamePrize::findOrFail($id);
        if($game_prize->status == 1){
            $game_prize->status = 0;
            $game_prize->save();
        }else{
            $game_prize->status = 1;
            $game_prize->save();
        }
        return redirect()->back()->with('success', 'Game Prize Status Change Successfully!');
    }
}
