<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/about','SobreNosController@index')->name('site.about');
Route::get('/contact', 'ContatoController@index')->name('site.contact');
Route::get('/login', function (){
    return "login";
})->name('site.login');

// parte privada:
Route::prefix('/app')->group(function(){

    Route::get('/clients', function (){
        return "clients";
    })->name('app.clients');

    Route::get('/suppliers', function (){
        return "<pre>suppliers<pre>";
    })->name('site.suppliers');

    Route::get('/products', function (){
        return "products";
    })->name('site.products');

});

Route::fallback(function(){
    echo "A PAGINA NAO PODE SER ENCONTRADA. <a href='".route('site.index')."'>CLIQUE AQUI</a>";
});

// teste de redirecionamento
Route::get('/rota1', function() {
    return "voce esta na rota UM";
})->name('site.rota1');

Route::get('/rota2', function() {
    // chamando o redirect para a rota com o name:
    return redirect()->route('site.rota1');
})->name('site.rota2');

// Route::redirect('rota2', 'rota1');





