<?php

use Illuminate\Support\Facades\Route;


// executa a funcao home() dentro do controlador Livro.
// Route::get('/livros', 'LivroController@home');

// usando parametros opcionais e restringindo id para inteiro e nome para string 
// Route::get('/contato/{nome}/{assunto_id?}',
//     function(string $nome, int $assunto_id = 1) 
//     {
//         echo "<h1>usuario: $nome - assunto_id: $assunto_id</h1>";
//     }
//     )->where(['id' => '[0-9]+', 'nome' => '[A-Za-z]+']);


// Parte publica do site
Route::view('/', 'site.home')->name('site.index');

Route::get('/sobre','SobreNosController@index')->name('site.sobre');
Route::get('/contato', 'ContatoController@index')->name('site.contato');
Route::post('/post', 'ContatoController@store')->name('site.contato');

Route::get('/login', function (){
    return "login";
})->name('site.login');

// parte privada:
Route::prefix('/app')->group(function(){

    Route::get('/clientes', function (){
        return "clientes";
    })->name('app.clientes');

    Route::get('/fornecedores', 'SupplierController@index')->name('app.fornecedores');   

    Route::get('/produtos', function (){
        return "products";
    })->name('app.produtos');

});

Route::fallback(function(){
    echo "A PAGINA NAO PODE SER ENCONTRADA. <a href='".route('site.index')."'>CLIQUE AQUI</a>";
});

// teste de redirecionamento
// Route::get('/rota1', function() {
//     return "voce esta na rota UM";
// })->name('site.rota1');

// Route::get('/rota2', function() {
//     // chamando o redirect para a rota com o name:
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// Route::redirect('rota2', 'rota1');

Route::get('/teste/{p1}/{p2}', 'TesteController@testando')->name('site.teste');


