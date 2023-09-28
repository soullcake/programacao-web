<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livro', [LivroController::class, 'index'])->name('livro.index');   //  pagina inicial dos livros

Route::get('/livro/cadastrar', [LivroController::class, 'create'])->name('livro.create'); // formulario
Route::post('/livro/cadastrar', [LivroController::class, 'store'])->name('livro.store');    //  salva o formulario no banco de dados

Route::get('/livro/{livro}', [LivroController::class, 'show'])->name('livro.show'); //exibe um registro especifico de livro do BD

Route::get('/livro/editar/{livro}', [LivroController::class, 'edit'])->name('livro.edit');  //formulario de update
Route::put('/livro', [LivroController::class, 'update'])->name('livro.update');

Route::delete('/livro', [LivroController::class, 'destroy'])->name('livro.destroy');     // deleta um registro