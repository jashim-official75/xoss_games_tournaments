<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SignUpController extends Controller
{
    //---logout
    public function logout()
    {
        Auth::guard('subscriber')->logout();
        return redirect('/');
    }

    //---index
    public function index(Request $request)
    {
        $referr_code = $request->referr_id;
        return view('frontend.auth.signup', compact('referr_code'));
    }

    //---index
    public function store(Request $request)
    {
        $get_referr = Null;
        $subscriber_check = Subscriber::where('referr_code', $request->refer_code)->first();
        if($subscriber_check){
            $get_referr =  $request->refer_code;
        }
        $ip = $request->ip();
        $geoinfo = geoip()->getLocation($ip);
        $country = $geoinfo->country;
        $request->validate([
            'phone_num' => 'required|numeric|unique:subscribers',
            'password' => 'required|min:6|confirmed',
        ]);

        if (substr($request->phone_num, 0, 2) == "88"){
            $phone_num = str_replace('88', '', $request->phone_num);
        }elseif (substr($request->phone_num, 0, 3) == "+88"){
            $phone_num = str_replace('+88', '', $request->phone_num);
        }else{
            $phone_num = $request->phone_num;
        }
        $referr_code = Str::random(4);
        // return $referr_code;
        $subscriber = Subscriber::create([
            'phone_num'=>$phone_num,
            'password'=>Hash::make($request->password),
            'device_ip'=>$ip,
            'country'=>$country,
            'referr_code'=>$referr_code,
            'get_referr'=>$get_referr,
        ]);

        if($subscriber){
            Auth::guard('subscriber')->login($subscriber);
            return redirect()->route('home')->with('success', 'Registration Successfully');
        }
    }
}
