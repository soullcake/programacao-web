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

$connection->exec(
    "INSERT INTO musics (title, artist) VALUES 
    ('Song of Joy', 'John Smith'),
    ('Summer Breeze', 'Emily Johnson'),
    ('Rainy Day Blues', 'Michael Brown'),
    ('Dancing in the Moonlight', 'Jessica Davis'),
    ('Sunny Afternoon', 'David Wilson'),
    ('Midnight Serenade', 'Sarah Taylor'),
    ('Ocean Dreams', 'Matthew Martinez'),
    ('Autumn Leaves', 'Ava Anderson'),
    ('Morning Dew', 'Christopher Thompson'),
    ('City Lights', 'Olivia Garcia'),
    ('Whispering Wind', 'Daniel Rodriguez'),
    ('Echoes of Time', 'Sophia Martinez'),
    ('Golden Sunset', 'William Jackson'),
    ('Starlight Sonata', 'Emma Robinson'),
    ('Quiet Reflections', 'Ethan Clark'),
    ('Twilight Melody', 'Isabella Hernandez'),
    ('Mystic River', 'James Lee'),
    ('Enchanted Forest', 'Charlotte White'),
    ('Snowflake Waltz', 'Ryan Adams'),
    ('Eternal Love', 'Madison Brown');"
);

?>