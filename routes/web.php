<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Route for the default index page
Route::get('/', function () {
    return view('layouts.app');
});



Route::get('/admin/dashboard',[AdminDashboardController::class, 'index'])->name('admin.dashboard');


// Route::get('login',)

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('/create/student', function () {
    return view('student.create-student');
});


