<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Prize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Prizecontroller extends Controller
{
    public function index()
    {
        $prizes = Prize::latest()->get();
        return view('backend.pages.prize.index', compact('prizes'));
    }

    public function create()
    {
        return view('backend.pages.prize.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:prizes,name',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp',
        ]);
        $image = $request->file('image')->getClientOriginalExtension();
        $file_name = Str::slug($request->name) . '.' . $image;
        $image_path_name = 'uploads/Prize/' . $file_name;
        $request->file('image')->move(public_path('uploads/Prize'), $file_name);
        $prize = new Prize();
        $prize->name = $request->name;
        $prize->slug = Str::slug($request->name);
        $prize->image = $image_path_name;
        $prize->save();
        return redirect()->route('prize.index')->with('success', 'Prize Created Successfully!');
    }

    public function edit(Prize $prize)
    {
        return view('backend.pages.prize.edit', compact('prize'));
    }

    public function update(Request $request, Prize $prize)
    {
        $request->validate([
            'name' => 'required|unique:prizes,name,' .$prize->id,
            'image' => 'image|mimes:png,jpg,jpeg,webp',
        ]);
        $prize->name = $request->name;
        if ($request->hasFile('image')) {
            if ($prize->image) {
                File::delete(public_path($prize->image));
            }
            $image = $request->file('image')->getClientOriginalExtension();
            $file_name = Str::slug($request->name) . '.' . $image;
            $image_path_name = 'uploads/Prize/' . $file_name;
            $request->file('image')->move(public_path('uploads/Prize'), $file_name);
            $prize->image = $image_path_name;
        }
        $prize->save();
        return redirect()->route('prize.index')->with('success', 'Prize Updated Successfully!');
    }

    public function destroy(Prize $prize)
    {
        if($prize->image){
            File::delete(public_path($prize->image));
        }
        $prize->delete();
        return redirect()->route('prize.index')->with('success', 'Prize Deleted Successfully!');
    }
}
