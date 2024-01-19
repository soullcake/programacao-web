<?php

use App\Http\Controllers\SalaController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\SameSize;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salas', [SalaController::class, 'index']);
Route::get('/salas/detalhes/{id}', [SalaController::class, 'show'])->name('sala_show');
