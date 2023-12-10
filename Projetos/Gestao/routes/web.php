<?php

use Illuminate\Support\Facades\Route;
use App\Http\ContactController;

// ============================ public site ============================ 
Route::view('/', 'site.home')->name('site.home');
Route::view('/sobre', 'site.about')->name('site.about');

Route::get('/contato', 'ContactController@contact')->name('site.contact');

Route::get('/login', function() {  
    return view('auth'); 
})->name('login');



// ============================ app ============================
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




Route::fallback(function() {
   echo '<h1>Erro 404. <a href="'.route('site.home').'">Clique Aqui</a></h1>';
});

