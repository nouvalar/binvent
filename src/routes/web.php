<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Rute untuk menampilkan form login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); // Rute untuk memproses login