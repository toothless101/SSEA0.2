@extends('layout.app')
@section('title', 'PaScan | Register')
@section('content')

<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="container signup-container">

    <!-- Left Section -->
    <div class="left">
        <h1>Sign Up</h1>
        <div class="underline"></div>

        <!-- Signup Message -->
        <div class="createmsg">
            <h2>Create an Admin user</h2>
        </div>

        <!-- Signup Form -->
        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <!-- Full Name Field -->
            <div class="form-group mb-4 position-relative">
                <input type="text" id="fullname" name="fullname" autofocus>
                <label for="fullname">Full Name</label>
                @if($errors->has('fullname'))
                    <div class="text-danger">{{$errors->first('fullname')}}</div>
                @endif 
                <i class="fas fa-user icon"></i>
                   
            </div>

            <!-- Username Field -->
            <div class="form-group mb-4 position-relative">
                <input type="text" id="username" name="username">
                <label for="username">Username</label>
                <i class="fas fa-user icon"></i>
                @if($errors->has('username'))
                    <span class="text-danger">
                        {{$errors->first('username')}}
                    </span>
                @endif  
            </div>

            <!-- Password Field -->
            <div class="form-group mb-4 position-relative">
                <input type="password" id="password" name="password">
                <label for="password">Password</label>
                <i class="fas fa-lock icon"></i>
                @if($errors->has('password'))
                    <span class="text-danger">
                        {{$errors->first('password')}}
                    </span>
                @endif  
            </div>

                    <!-- Signup Button -->
        <div class="signup_button">
            <button type="submit" class="s-btn">Sign Up</button>
        </div>

        </form>


        <!-- Login Prompt -->
        <div class="login_button">
            Already have an account? 
            <a href="#">Login</a>
        </div>
    </div>

    <!-- Right Section -->
    <div class="right">
        <h1>TAGUM CITY COLLEGE OF SCIENCE AND TECHNOLOGY <br> FOUNDATION, INC.</h1>

        <!-- School Logos -->
        <div class="school_logos">
            <div class="school_logo">
                <img src="{{ asset('img/418786725_1079231866656453_7752077010997336838_n (1).png') }}" alt="tccstfi_logo">
            </div>
            <div class="ssc_logo">
                <img src="{{ asset('img/418786725_1079231866656453_7752077010997336838_n (1).png') }}" alt="tccstfi_logo">
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

</div>

@endsection