<?php

function connection() : SQLite3 {
    return new SQLite3('database.db');
}

$connection = connection();

$connection->exec(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY,
        username TEXT,
        passwd TEXT)"
);

$connection->exec(
    "CREATE TABLE IF NOT EXISTS musics (
        id INTEGER PRIMARY KEY,
        title TEXT NOT NULL,
        artist TEXT NOT NULL)"
);

?>