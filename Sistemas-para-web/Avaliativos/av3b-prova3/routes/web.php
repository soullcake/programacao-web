<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::get('/register', [AuthController::class, 'registerCreate'])->name('register.create');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');

Route::get('/login', [AuthController::class, 'loginCreate'])->name('login.create');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function() {
    return view('dashboard');
});
