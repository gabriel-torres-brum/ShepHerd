<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\App\AuthController;
use App\Http\Controllers\App\Administrativo\PessoasController;

// Route::fallback(fn () => redirect()->route('login'));

/* Not protected routes */
Route::middleware('guest')->group(function () {
    /* Login */
    Route::get('',  [AuthController::class, 'login'])->name('login');
    Route::post('', [AuthController::class, 'loginHandle'])->name('login.handle');
    /* Register */
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::put('register', [AuthController::class, 'registerHandle'])->name('register.handle');
});

/* Protected routes */
Route::middleware('auth')->group(function () {

    Route::get('dashboard', fn () => redirect()->route('administrativo.pessoas.list'));

    /* Administrativo */
    Route::get('administrativo/pessoas', fn () => redirect()->route('administrativo.pessoas.list'));
    Route::get('administrativo/pessoas/listar', [PessoasController::class, 'list'])->name('administrativo.pessoas.list');
    Route::get('administrativo/pessoas/criar',  [PessoasController::class, 'create'])->name('administrativo.pessoas.create');
    Route::put('administrativo/pessoas/criar',  [PessoasController::class, 'handleCreate'])->name('administrativo.pessoas.handleCreate');
    Route::delete('administrativo/pessoas/excluir',  [PessoasController::class, 'delete'])->name('administrativo.pessoas.delete');
});

/* Logout */
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
