<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    app\DashboardController,
    app\Administrativo\PessoasController,
};

Route::fallback(function () {
    return redirect()->route('login');
});
Route::middleware('auth')->group(function () {
    Route::prefix('app')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('app.dashboard');
        Route::prefix('administrativo')->group(function () {
            Route::get('pessoas', [PessoasController::class, 'list'])->name('app.administrativo.pessoas');
        });
    });
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