<?php

/**
 * Este arquivo contém as rotas registradas para a aplicação.
 * A variável $rotas guarda pares de valores que representam
 * a rota e o script php ou arquivo html correspondente.
 * 
 * Além disso, uma função chamada rotear () é utilizada para
 * implementar o algoritmo de roteamento base da aplicação.
 */

Route::get('/', '/pages/home.html');
Route::get('/dashboard', '/pages/dashboard.php');
Route::get('/users/create', '/pages/users/register.html');
Route::get('/users/login', '/pages/users/login.html');

Route::post('/users/store', '/Controllers/auth/register.php');
Route::get('/logout', '/Controllers/auth/logout.php');
Route::get('/login', '/Controllers/auth/login.php');

Route::get('/books/create', '/Controllers/books/create.php');
Route::post('/books/store', '/Controllers/books/store.php');
Route::get('/books/index', '/Controllers/books/index.php');
