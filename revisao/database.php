<?php

function connection() : SQLite3 {
    return new SQLite3('database.db');
}

// cria conexao com o banco de dados
$connection = connection();

//criando tabela alunos
$connection->exec(
    "CREATE TABLE IF NOT EXISTS alunos(
        id INTEGER PRIMARY KEY,
        nome TEXT,
        matricula TEXT,
        curso TEXT)"
);





