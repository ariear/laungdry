<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PacketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class,'index']);
Route::get('/about', [LandingController::class,'about']);
Route::get('/contact', [LandingController::class,'contact']);
Route::get('/service', [LandingController::class,'service']);

Route::get('/auth/login',[AuthController::class,'index'])->middleware('guest')->name('login');
Route::post('/auth/login',[AuthController::class,'store']);
Route::post('/auth/logout',[AuthController::class,'logout']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::get('/dashboard/profile', [DashboardProfileController::class,'index'])->middleware('auth');
Route::put('/dashboard/profile/{id}',[DashboardProfileController::class,'updateData'])->middleware('auth');
Route::put('/dashboard/profile/{id}/updatepassword',[DashboardProfileController::class,'updatePassword'])->middleware('auth');

Route::get('/dashboard/setting', [DashboardSettingController::class,'index'])->middleware('auth');
Route::put('/dashboard/setting/{id}', [DashboardSettingController::class,'updateData'])->middleware('auth');

Route::resource('/dashboard/packets',PacketController::class);
