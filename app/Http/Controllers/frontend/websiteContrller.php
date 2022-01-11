<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class websiteContrller extends Controller
{
    //

    public function profile(){
        return view('frontend.profile.profile_index');
    }

    public function index(){
        return view('frontend.website_index');
    }
}
