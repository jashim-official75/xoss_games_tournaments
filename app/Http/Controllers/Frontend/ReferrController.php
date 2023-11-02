<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferrController extends Controller
{
    //--referr
    public function referr()
    {
        $user = Subscriber::where('id', auth()->guard('subscriber')->user()->id)->first();
        $refer_url = route('user.sign_up') . '?referr_id=' . $user->referr_code;

        $shareComponent = \Share::page("https://tournament.xoss.games/sign-up?referr_id=$user->referr_code")
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();
        $total_register = Subscriber::where('get_referr', $user->referr_code)->count();
        $total_purchase = DB::table('tournament_payment_details')
            ->join('subscribers', 'tournament_payment_details.subscriber_id', '=', 'subscribers.id')
            ->where('subscribers.get_referr', '=', auth()->guard('subscriber')->user()->referr_code)
            ->get();
        return view('frontend.pages.referr', compact('user', 'refer_url', 'total_register', 'shareComponent'));
    }
}
