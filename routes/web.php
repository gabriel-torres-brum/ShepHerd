<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
    AuthController,
    HomeController
};

Route::get('login', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('app.home.index');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/', 'login')->name('login');
        Route::post('/', 'loginHandle')->name('login.handle');
        Route::get('register', 'register')->name('register');
        Route::post('register', 'registerHandle')->name('register.handle');
    });
});