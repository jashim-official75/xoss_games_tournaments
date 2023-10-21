<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ResetPasswordOtp;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    //--verify_number
    public function verify_number()
    {
        return view('frontend.reset-password.verify_number');
    }

    public function send_otp_store(Request $request)
    {
        $request->validate([
            'phone_num' => 'required'
        ]);

        if (substr($request->phone_num, 0, 2) == "88") {
            $phone_num = str_replace('88', '', $request->phone_num);
        } elseif (substr($request->phone_num, 0, 3) == "+88") {
            $phone_num = str_replace('+88', '', $request->phone_num);
        } else {
            $phone_num = $request->phone_num;
        }
        $subcriber = Subscriber::where('phone_num', $request->phone_num)->first();
        $phone_number = $subcriber->phone_num ?? '';
        if ($phone_number == $phone_num) {
            $otp = random_int(100000, 999999);
            ResetPasswordOtp::create([
                'phone_number' => $phone_num,
                'otp' => $otp,
            ]);
            $url = Http::get('https://api.infobuzzer.net/v3.1/TransmitSMS?username=hosain@naptechlabs.com&password=NapTechLabs&from=09610537609&to=' . $phone_num . '&text=XossGames password reset OTP : ' . $otp);
            return redirect()->route('otp');
        } else {
            return back()->with('error', 'plz valid number');
        }
    }


    //--otp---
    public function otp()
    {
        return view('frontend.reset-password.otp');
    }

    //--otp_match
    public function otp_match(Request $request)
    {
        $request->validate([
            'otp' => 'required'
        ]);

        $otps = ResetPasswordOtp::where('otp', $request->otp)->first();
        $otp = $otps->otp ?? '';

        if ($otp == $request->otp) {
            return redirect()->route('new.password', encrypt($otp));
        } else {
            return back()->with('error', 'Your Otp is Wrong');
        }
    }

    //--new_password
    public function new_password($otp)
    {
        $otp = decrypt($otp);
        return view('frontend.reset-password.new_password', compact('otp'));
    }

    //--new_password_store--
    public function new_password_store(Request $request)
    {
        $request->validate([
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

        $reset_otp = ResetPasswordOtp::where('otp', $request->otp)->first();
        $number = $reset_otp->phone_number ?? '';
        $subcriber = Subscriber::where('phone_num', $number)->first();
        $subcriber_number = $subcriber->phone_num ?? '';


        if($number == $subcriber_number){
            $subcriber->update([
                'password'=>Hash::make($request->password),
            ]);
            $reset_otp->delete();

            return redirect()->route('user.sign_in')->with('success', 'Your Password Reset Successfully ! ');
        }
        else{
            return back()->with('error', 'You should enter your subscription number');
        }
    }
}
