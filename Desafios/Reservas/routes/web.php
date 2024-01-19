<?php

use App\Http\Controllers\SalaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/salas', [SalaController::class, 'index']);
