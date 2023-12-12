<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BannerRequest;
use App\Models\Backend\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('backend.pages.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.banner.create');
    }

    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->title_font_size = $request->title_font_size;
        $banner->sub_title = $request->sub_title;
        $banner->sub_title_font_size = $request->sub_title_font_size;
        $banner->btn_text = $request->btn_text;
        $banner->btn_link = $request->btn_link;
        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image')->getClientOriginalExtension();
            $file_name = Str::slug($request->title) . '.' . $image;
            $image_path_name = 'uploads/Banner/' . $file_name;
            $request->file('banner_image')->move(public_path('uploads/Banner'), $file_name);
            $banner->banner_image = $image_path_name;
        }
        if ($banner->save()) {
            return redirect()->route('banner.index')->with('success', 'Banner Created Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('backend.pages.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::where('id', $id)->first();
        $banner->title = $request->title;
        $banner->title_font_size = $request->title_font_size;
        $banner->sub_title = $request->sub_title;
        $banner->sub_title_font_size = $request->sub_title_font_size;
        $banner->btn_text = $request->btn_text;
        $banner->btn_link = $request->btn_link;
        if ($request->hasFile('banner_image')) {
            if ($banner->banner_image) {
                File::delete(public_path($banner->banner_image));
            }
            $image = $request->file('banner_image')->getClientOriginalExtension();
            $file_name = Str::slug($request->title) . '.' . $image;
            $image_path_name = 'uploads/Banner/' . $file_name;
            $request->file('banner_image')->move(public_path('uploads/Banner'), $file_name);
            $banner->banner_image = $image_path_name;
        }
        if ($banner->save()) {
            return redirect()->route('banner.index')->with('success', 'Banner Created Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            File::delete(public_path($banner->image));
        }
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Banner Deleted Successfully!');
    }
}
