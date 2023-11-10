<?php


function connection() : SQLite3 {
    return new SQLite3('database.db');
}

$connection = connection();

//definindp tabela de usuarios:
$connection->exec(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY,
        username TEXT,
        email TEXT,
        password TEXT)"
);




?>