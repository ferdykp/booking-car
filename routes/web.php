<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\BookingCarController;

Route::get('/', function () {
    return view('index');
});
// Route::get('/login', function () {
//     return view('login');
// });


Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');

    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');

    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(BookingCarController::class)->group(function () {
    Route::get('/booking', 'create')->name('booking.create');
    Route::post('/booking/store', 'store')->name('booking.store');
});



