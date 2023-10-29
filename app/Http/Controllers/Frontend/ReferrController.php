<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class ReferrController extends Controller
{
    //--referr
    public function referr()
    {
        $user = Subscriber::where('id', auth()->guard('subscriber')->user()->id)->first();
        $refer_url = route('user.sign_up').'?referr_id='.$user->referr_code;
        return view('frontend.pages.referr', compact('user', 'refer_url'));
    }
}
