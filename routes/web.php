<?php

use App\Models\Rempah;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeDetailRempah;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dataRempahController;
use App\Http\Controllers\dashboardTeamController;
use App\Http\Controllers\dashboardRempahController;

//Route Halaman Utama
Route::get('/', [homeController::class, 'index'])->middleware('guest');

//Route Halaman Coba
Route::get('/coba', function () {
    return view ('coba ');
});

//Route Halaman DetailRempah
Route::get('/detail-rempah', [homeDetailRempah::class, 'index'])->middleware('guest');

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');

//Route Login
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);

//Route Register
Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);

//Route Logout
Route::post('/logout', [loginController::class, 'logout']);

//Route CRUD data rempah
Route::resource('/dashboard/data-rempah', dashboardRempahController::class) ->parameters(['data-rempah' => 'rempah'])->middleware('auth');

Route::resource('/dashboard/data-team', dashboardTeamController::class) ->parameters(['data-team' => 'team'])->middleware('auth');

//Route Sluggable
Route::get('/dashboard/data-rempah/checkSlug', [dashboardController::class, 'checkSlug'])->middleware('auth');




