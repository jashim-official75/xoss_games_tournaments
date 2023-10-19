<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    //--index
    public function index()
    {
        return view('frontend.auth.signin');
    }

    //--store
    public function store(Request $request)
    {
        $request->validate([
            'phone_num' => 'required|numeric',
            'password' => 'required',
        ]);

        if (substr($request->phone_num, 0, 2) == "88"){
            $phone_num = str_replace('88', '', $request->phone_num);
        }elseif (substr($request->phone_num, 0, 3) == "+88"){
            $phone_num = str_replace('+88', '', $request->phone_num);
        }else{
            $phone_num = $request->phone_num;
        }

        if(auth()->guard('subscriber')->attempt(['phone_num' => $phone_num, 'password' => $request->password])){
            return redirect()->route('home')->with('success', "You have been logged in");
        }else{
            return redirect()->route('user.sign_in')->with('error', "Credentials do not match our records!");
        }
    }
}
