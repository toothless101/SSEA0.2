@extends('layout.app')
@section('title', 'PaScan | Login')
@section('content')

<link rel="stylesheet" href="{{ asset('css/log-in.css')}}">
<script src="{{asset('js/register.js')}}"></script>

<div class="container">
    @if(session()->has("success")) <!-- this condition is to display the alert message if it was successful or not-->
    <div class="alert alert-success">
        {{session()->get("success")}}
    </div>
    @endif
    @if(session()->has("error"))
    <div class="alert alert-danger">
        {{session()->get("error")}}
    </div>
    @endif
    <!-- Left Section -->
    <div class="left">
        <h1>TAGUM CITY COLLEGE OF SCIENCE AND TECHNOLOGY <br> FOUNDATION, INC.</h1>
        
        <!-- School Logos -->
        <div class="school_logos">
            <div class="school_logo">
                <img src="{{ asset('img/418786725_1079231866656453_7752077010997336838_n (1).png') }}" alt="tccstfi_logo">
            </div>
            <div class="ssc_logo">
                <img src="{{ asset('img/418786725_1079231866656453_7752077010997336838_n (1).png') }}" alt="ssc_logo">
            </div>
        </div>
        
        <!-- Welcome Message (Commented Out for Now) -->
        <!-- 
        <div class="welcomemsg">
            <h1>WELCOME</h1>
            <p class="welcomemsg_1">
                Create an account using your <br>
                personal details to access all the<br>
                system features
            </p>
        </div>
        -->
    </div>

    <!-- Right Section -->
    <div class="right">
        <h1>Login</h1>
        <div class="underline"></div>

        <!-- Login Message -->
        <div class="createmsg">
            <h2>Login as Admin user</h2>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{route("login.post")}}">
            @csrf
            <!-- Username Field -->
            <div class="form-group mb-4 position-relative">
                <input type="text" id="username" name="username" autofocus required>
                <label for="username">Username</label>
                <i class="fas fa-user icon"></i>
            </div>

            <!-- Password Field -->
            <div class="form-group mb-4 position-relative">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
                <i class="fas fa-lock icon"></i>
            </div>

            <!-- Forgot Password Link -->
            <div class="forgot_password" id="forgot_pas">
                <a href="">Forgot Password?</a>
            </div>

             <!-- Login Button -->
            <div class="log_btn">
                <button class="login_btn" id="login_btn">Login</button>
            </div>
        </form>

       

        <!-- Signup Prompt -->
        <div class="signup_btn">
            Don't have an account? 
            <a href="#">Sign Up</a>
        </div>
    </div>

</div>

@endsection