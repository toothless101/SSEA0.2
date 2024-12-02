@extends('layout.app')
@section('title', 'PaScan | Officer Profile')
@section('content')

<link rel="stylesheet" href="{{asset('css/officers.css')}}">
@include('partials.sidebar')
@include('partials.header')

<section id="main" class="main">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="officer_profile_title">
            <label for="officers_profile">Officer's Profile</label>
        </div>
    </div>
</section>
@endsection