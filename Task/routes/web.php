<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::view('/','home');

Route::get('/dashboard', function(){
    return view('dashboard');    
})->name('dashboard');

Route::get('/user/register', [AuthController::class, 'registerCreate'])->name('registerCreate');
Route::post('/user/store', [AuthController::class, 'registerStore'])->name('registerStore');

Route::get('/user/login', [AuthController::class, 'loginCreate'])->name('loginCreate');
Route::post('/user/check', [AuthController::class, 'loginCheck'])->name('loginCheck');

Route::delete('/user/logout', [AuthController::class, 'logout'])->name('logout');

