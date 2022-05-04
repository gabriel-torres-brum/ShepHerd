<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    app\DashboardController,
    app\Administrativo\PessoasController,
};

Route::fallback(fn () => redirect()->route('login'));

/* Protected routes */
Route::middleware('auth')->group(function () {

    /* Dashboard */
    // Route::get('dashboard', [DashboardController::class, 'index'])->name('app.dashboard');
    Route::get('app/dashboard', fn () => redirect()->route('app.administrativo.pessoas.list'));
    /* Administrativo */
    Route::get('app/administrativo/pessoas', [PessoasController::class, 'list'])->name('app.administrativo.pessoas.list');
});

/* Not protected routes */
Route::middleware('guest')->group(function () {

    /* Login */
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'loginHandle'])->name('login.handle');
    /* Register */
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'registerHandle'])->name('register.handle');
    /* Logout */
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
