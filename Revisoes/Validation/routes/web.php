<?php

use App\Http\Controllers\PlayerController;
use App\Models\Player;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/player', [PlayerController::class, 'index']);
Route::get('/player/create', [PlayerController::class, 'create'])->name('player.create');
Route::post('/player/store', [PlayerController::class, 'store'])->name('player.store');

Route::get('/player/edit/{id}', [PlayerController::class, 'edit'])->name('player.edit');
Route::put('/player/update/{id}', [PlayerController::class, 'update'])->name('player.update');


