<?php

session_start();

include __DIR__ . '/database.php';
include __DIR__ . '/rotas.php';
include __DIR__ . '/models/User.php';
include __DIR__ . '/models/Book.php';

$connection = connection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

rotear($uri, $rotas);
