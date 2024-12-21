@extends('layout.app')
@section('title', 'Student Profile')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="{{asset('css/attendees.css')}}">

<section id="main" class="main">
    <div class="stud-prof mb-3">
        <button type="button" class="btn-back">
            <i class="bi bi-arrow-left-circle-fill" style="color: #550000; margin: 10px;"></i>
        </button>
        <div class="student_profile_title">
            <label for="student_profile">Student Profile</label>
        </div>
    </div>
    
    <hr style="height: 2px; border-width: 1; color: #550000; background-color: #550000; ">

    <div class="stud_details_container ">
        <div class="details-container d-flex justify-content-between">
            <div class="column-1">
                <div class="item roll_no">
                    <h5><span class="label">Roll No.:</span> <span>2024001</span></h5>
                </div>
                <div class="item">
                    <h5><span class="label">Department:</span><span>College</span></h5>
                </div>
                <div class="item">
                    <h5><span class="label">Program/Track:</span><span>BSCS</span></h5>
                </div>
            </div>
            <div class="column-2">
                <div class="item">
                    <h5><span class="label">Gr/Yr Level:</span><span>4th Year</span></h5>
                </div>
                <div class="item">
                    <h5><span class="label">Section:</span><span>-</span></h5>
                </div>
                <div class="item">
                    <h5><span class="label">Major/Strand:</span><span>-</span></h5>
                </div>
            </div>
            <div class="qr_holder">
                <div class="qr_code d-flex justify-content-center">
                    <img id="qr_output" alt="QR Code" src="{{asset('img/no-image-available.png')}}">
                </div>
                <div class="s_year">
                    <h6>S.Y. <span>2024-2025</span></h6>
                </div>
                <div class="print d-flex justify-content-center">
                    <button class="print_qr"><i class="bi bi-printer-fill"></i>  Print</button>
                </div>
            </div>
        </div>
    </div>

    <hr style="height: 2px; border-width: 1; color: #550000; background-color: #550000; ">
    
</section>
@endsection