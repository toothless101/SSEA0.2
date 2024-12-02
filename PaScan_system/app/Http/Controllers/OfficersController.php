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
        return view('pages.officer_profile');
    }
}
