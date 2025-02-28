<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;

Route::get('/',[HomeController::Class,'index']);

Route::get('/home',[HomeController::Class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::Class,'addview']);

Route::get('/svfc', function () {
    return view('navbarcontents.svfc'); // Use dot notation
});

Route::get('/adminhome', function () {
    return view('admin.home');
})->name('home');


Route::middleware(['auth'])->group(function () {
    Route::post('/svfc', [AppointmentController::class,''])->name('appointments.store');
});