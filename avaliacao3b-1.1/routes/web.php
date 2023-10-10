<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/sobre', 'sobre');

// Usuario: 
Route::get('/usuario/cadastro', function(){
    return view('usuario.cadastro');

})->name('usuarioCadastro');

Route::post('usuario', function(Request $request){
    return "usuario cadastrado";

})->name('userLogin');


// instrumento: 
Route::get('/instrumento/cadastro', function(){
    return view('instrumento.cadastro');

})->name('instrumentoCadastro');

Route::post('instrumento', function(){
    return "instrumento cadastrado";
})->name('instrumentoStore');