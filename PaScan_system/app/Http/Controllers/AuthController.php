<?php

namespace App\Http\Controllers;

use App\Models\UserList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    function loginPost(Request $request){
        $request->validate([
            'username' => "required",
            'password' => "required"
        ]);

        $log_credentials = $request->only('username', 'password');
        if(Auth::attempt($log_credentials)){
            return redirect()->intended(route("dashboard"));
        }
        return redirect(route('login'))->with("danger", "Please enter correct credentials");
    }

    function register(){
        return view('auth.register');
    }

    function registerPost(Request $request){
        $request -> validate([
            'fullname' => "required",
            'username' => "required",
            'password' => "required"
        ]);

        $user = new UserList();
        $user->fullname = $request->fullname;
        $user->position = 'admin';
        $user->username = $request->username;
        $user->password = Hash::make($request->password); //if u are using hash or encryption in registration, it must also be used in login.

        if($user->save()){
            return redirect(route("login"))->with("success", "New User Added Successfully");
        }
        return redirect(route("register"))->with("error", "Failed to Create New User"); //"register" is from the name implemented in the web.php same as the login it was given to the login and register pages. If error, it wil be redirected to the registration phase but if it addedd successfully it will be directed to the login page.

    }
}
