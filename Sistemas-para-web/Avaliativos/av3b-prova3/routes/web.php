<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AutomovelController;
use App\Http\Controllers\ImovelController;
use App\Models\Automovel;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::get('/register', [AuthController::class, 'registerCreate'])->name('register.create');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');

Route::get('/login', [AuthController::class, 'loginCreate'])->name('login.create');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/automovel', [AutomovelController::class, 'create'])->name('automovel.create');
Route::post('/automovel', [AutomovelController::class, 'store'])->name('automovel.store');
Route::get('/automovel/show', [AutomovelController::class, 'show'])->name('automovel.show');

Route::get('/imovel', [ImovelController::class, 'create'])->name('imovel.create');
Route::post('/imovel', [ImovelController::class, 'store'])->name('imovel.store');
Route::get('/imovel/show', [ImovelController::class, 'show'])->name('imovel.show');
