<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\TournamentGame;
use App\Models\GameScore;
use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function my_games()
    {
        $current_date = Carbon::now()->format('Y-m-d');
        $games = DB::table('tournament_payment_details')
            ->join('tournament_games', 'tournament_payment_details.tournament_game_id', '=', 'tournament_games.id')
            ->where('tournament_payment_details.subscriber_id', '=', auth()->guard('subscriber')->user()->id)
            ->where('tournament_games.end_date', '>', $current_date)
            ->select('tournament_games.slug', 'tournament_games.image', 'tournament_games.game_name')
            ->get();
            return view('frontend.profile.my_game', compact('games'));
    }
    //---profile
    public function profile()
    {
        $user = Subscriber::where('id', auth()->guard('subscriber')->user()->id)->first();
        return view('frontend.profile.index', compact('user'));
    }
    //--profile_update
    public function profile_update(Request $request, $id)
    {
        $user = Subscriber::where('id', $id)->first();
        $user->update([
            'name' => $request->name,
            'phone_num' => $request->phone_num,
        ]);
        //---change password
        if ($request->new_password) {
            $request->validate([
                'new_password' => 'required|min:6',
            ]);
            if (!Hash::check($request->password, $user->password)) {
                return back()->with('error', 'The old password does not match our records!');
            } else {
                $password = Hash::make($request->new_password);
                $user->update(['password' => $password]);
            }
        }
        //---image 
        if ($request->hasFile('profile_pic')) {
            $oldFile = $user->profile_pic;
            $oldPath = 'uploads/User/Profile/' . $oldFile;
            if ($oldPath) {
                File::delete(public_path($oldPath));
            }
            $profile = uniqid() . '_' . $user->phone_num . '.' . $request->file('profile_pic')->extension();
            $request->file('profile_pic')->move(public_path('uploads/User/Profile'), $profile);
            $user->update([
                'profile_pic' => $profile
            ]);
        }
        return redirect()->route('home')->with('success', 'Profile Updated Successfully!');
    }
}
