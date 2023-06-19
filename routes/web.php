<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth'])->get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::middleware(['auth'])->post('/register', [RegisterController::class, 'register']);
