<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\AlbumController;


Route::view('/', 'home');


// user:
Route::get('/user/create', [Usercontroller::class, 'create'])->name('userCreate');
Route::post('/user/store', [Usercontroller::class, 'store'])->name('userStore');


Route::get('/dashboard/index/{name}', [AlbumController::class, 'index'])->name('dashboard');

Route::post('/dashboard/album/store', [AlbumController::class, 'store'])->name('albumStore');

Route::get('/dashboard/album/{name}/{album}/{artist}', [AlbumController::class, 'show'])->name('albumPage');
