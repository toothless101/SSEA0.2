@extends('layout.app')
@section('title', 'PaScan | Attendees')
@section('content')

<link rel="stylesheet" href="{{asset('css/attendees.css')}}">
@include('partials.sidebar')
@include('partials.header')


<section id="main" class="main">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- New Student Button -->
        <button class="btn btn-add-student">
            <i class="fa-solid fa-user-plus"></i> Student
        </button>

    
        <div class="search-container">
            <input 
                type="text" 
                class="search-input" 
                placeholder="Search"
            >
            <button class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <div class="filter" id="filter">
            <button id="filter-btn" class="filter-btn"></button>
        </div>
    </div>
</section>
@endsection 