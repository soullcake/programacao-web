<?php

use Illuminate\Support\Facades\Route;
use App\Http\ContactController;

// public site
Route::view('/', 'site.home');
Route::view('/sobre', 'site.about');

Route::get('/contato', 'ContactController@contact');


// app
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() {
        return  "CLIENTES";
    });
    Route::get('/fornecedores', function() {
        return  "FORNECEDORES";
    });
    Route::get('/produtos', function() {
        return  "PRODUTOS";
    });
});

