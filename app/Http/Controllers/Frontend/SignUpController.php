<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use App\Models\SubscriberNumberVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
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
        if ($subscriber_check) {
            $get_referr =  $request->refer_code;
        }
        $ip = $request->ip();
        $geoinfo = geoip()->getLocation($ip);
        $country = $geoinfo->country;
        $request->validate([
            'phone_num' => 'required|numeric|unique:subscribers',
            'password' => 'required|min:6|confirmed',
        ]);

        if (substr($request->phone_num, 0, 2) == "88") {
            $phone_num = str_replace('88', '', $request->phone_num);
        } elseif (substr($request->phone_num, 0, 3) == "+88") {
            $phone_num = str_replace('+88', '', $request->phone_num);
        } else {
            $phone_num = $request->phone_num;
        }
        $referr_code = Str::random(4);
        $otp = random_int(100000, 999999);
        // return $referr_code;
        $subscriber = Subscriber::create([
            'phone_num' => $phone_num,
            'password' => Hash::make($request->password),
            'device_ip' => $ip,
            'country' => $country,
            'referr_code' => $referr_code,
            'get_referr' => $get_referr,
        ]);
        // if ($subscriber) {
        //     SubscriberNumberVerify::create([
        //         'number' => $subscriber->phone_num,
        //         'otp' => $otp,
        //     ]);
        //     $url = Http::get('https://api.infobuzzer.net/v3.1/TransmitSMS?username=hosain@naptechlabs.com&password=NapTechLabs&from=09610537609&to=' . $subscriber->phone_num . '&text= Xoss Game Tournamnet OTP : ' . $otp);
        //     $request->session()->put('verify_sub_id', $subscriber->id);
        //     return redirect()->route('user.signup.verify');
            Auth::guard('subscriber')->login($subscriber);
            return redirect()->route('home')->with('success', 'Registration Successfully');
        // }
    }
    //--verify_number
    public function verify_number()
    {
        return view('frontend.auth.verify_number');
    }
    //--verify_number_check
    public function verify_number_check(Request $request)
    {
        $request->validate([
            'otp' => 'required'
        ]);
        $subscriber = Subscriber::where('id', $request->sub_id)->first();
        $otps = SubscriberNumberVerify::where('number', $subscriber->phone_num)->where('otp', $request->otp)->first();
        $otp = $otps->otp ?? '';
        if ($otp == $request->otp) {
            $subscriber->update([
                'otp_verify'=> 1
            ]);
            $otps->delete();
            Auth::guard('subscriber')->login($subscriber);
            return redirect()->route('home')->with('success', 'Registration Successfully');
        } else {
            return back()->with('error', 'Your Otp is Wrong');
        }
    }
}
