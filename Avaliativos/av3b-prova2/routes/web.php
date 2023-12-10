<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InstrumentController;


Route::view('/', 'home');
Route::view('/about', 'about');

Route::get('/dashboard/{rg}', function(string $rg){

    return view('dashboard', ['rg' => $rg]);

})->name('dashboard');


//user:
Route::get('/register', [UserController::class, 'create'])->name('userCreate');
Route::post('/register', [UserController::class, 'store'])->name('userStore');


//instrument:
Route::get('/instrument/{rg}', [InstrumentController::class, 'create'])->name('instCreate');
Route::post('/instrument/{rg}', [InstrumentController::class, 'store'])->name('instStore');
Route::get('/instrument', function(){
    return view('instrument.fall');
});
