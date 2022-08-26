<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/dashboard/profile', function () {
    return view('dashboard.profile');
});
