<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficersController extends Controller
{
    //
    public function officers(){
        return view('pages.officers');
    }

    function officer_profile(){
        return view('posts.officer_profile');
    }
}
