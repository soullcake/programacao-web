<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);

Route::get('/dashboard/{name}', function(string $name){

    return view('dashboard', ['name'=>$name]);
});


// Route::get('/dashboard/show/{name}/{artist}/{album}', [AlbumController::class, 'show']);

// Route::post('/dashboard/{name}/{album}', [AlbumController::class, 'store']);
