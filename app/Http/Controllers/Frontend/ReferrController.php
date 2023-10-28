<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReferrController extends Controller
{
    //--referr
    public function referr()
    {
        return view('frontend.pages.referr');
    }
}
