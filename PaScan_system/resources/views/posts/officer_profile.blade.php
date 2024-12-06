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
    <div class="officer-detail-container mt-4">
        <div class="officer-detail">
            <div class="off_name">
             <h6>Name: <span id="officer_name" class="officer_name">Hilary Mae Poralan</span></h6>
            </div>
            <div class="off_position">
                <h6>Position: <span id="position" class="position">President</span></h6>
            </div>
        </div>
    </div>

    <!--TABLE-->
    <table id="officer-profile-table">
        <thead>
            <tr>
                <th>Event</th>
                <th>Date</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>

        <tbody id="officers-profile">
            <tr>
                <td id="event-clm">Intramurals 2024</td>
                <td id="date-clm">09/11/2024 - 09/15/2024</td>
                <td id="status-cls">Wholeday</td>
                <td id="edit-clm"></td>
            </tr>
        </tbody>
    </table>
</section>
@endsection