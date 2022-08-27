<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class,'index']);
Route::get('/about', [LandingController::class,'about']);
Route::get('/contact', [LandingController::class,'contact']);
Route::get('/service', [LandingController::class,'service']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/dashboard/profile', function () {
    return view('dashboard.profile');
});
