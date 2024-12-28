<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendeesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OfficersController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function(){
    Route::view("/", "dashboard")->name('dashboard'); //the user can only access the welcome page if the user is logged in. through middleware it serves as the middleman to verify the user if it can be given an access to access the dashboard/welcome

});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/dashboard', [EventController::class, 'dashboard'])->name('dashboard');
Route::get('/officers', [OfficersController::class, 'officers'])->name('officers');
Route::get('/officer_profile', [OfficersController::class, 'officer_profile'])->name('officer_profile');//for officer profile view (only for viewing this time)
Route::get('/attendees', [AttendeesController::class, 'attendees'])->name('attendees');
Route::get('/student_profile', [AttendeesController::class, 'student_profile'])->name('officer_profile');
Route::get('/attendance', [AttendanceController::class, 'attendance'])->name('attendance');