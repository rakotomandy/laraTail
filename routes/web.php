<?php

use Illuminate\Support\Facades\Route;

// This single route serves your React app (or any page)
Route::get('{any}', function () {
    return view('app'); // → points to resources/views/app.blade.php
})->where('any', '.*');