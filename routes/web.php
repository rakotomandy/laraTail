<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Public pages
Route::get('/', function () {
    return view('app');
});

// Login routes
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected route example (you will create dashboard later)
Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware('auth');