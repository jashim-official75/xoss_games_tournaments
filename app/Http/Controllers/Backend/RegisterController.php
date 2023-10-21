<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //---register
    public function register()
    {
        return view('backend.auth.register');
    }

    //---register_store
    public function register_store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users,email',
            'password'=>'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('dashboard')->with('message', "Admin User Created Successfully!");
    }
}
