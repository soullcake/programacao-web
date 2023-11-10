<?php

function connection() : SQLite3 {
    return new SQLite3('database.db');
}

$connection = connection();

//tabelas de usuarios:
$connection->exec(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY,
        nome TEXT,
        email TEXT,
        senha TEXT)"
);

// tabelas de livros: 
$connection->exec(
    "CREATE TABLE IF NOT EXISTS books(
        id INTEGER PRIMARY KEY,
        titulo TEXT,
        autor TEXT,
        editora TEXT)"
);

// tabela de bilbliotecas (pr o usuario fazer colecoes caso deseje):
$connection->exec(
    "CREATE TABLE IF NOT EXISTS libs(
        id INTEGER PRIMARY KEY,
        nome TEXT,
        livros TEXT)"
);

// tabela com registro de emprestimos:
$connection->exec(
    "CREATE TABLE IF NOT EXISTS emprestimo(
        id INTEGER PRIMARY KEY,
        livro TEXT,
        pessoa TEXT,
        data_emprestimo TEXT,
        data_devolucao TEXT)"
);

?>