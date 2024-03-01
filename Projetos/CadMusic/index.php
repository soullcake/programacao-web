<?php

session_start();

include __DIR__ . '/database.php';
include __DIR__ . '/route.php';
include __DIR__ . '/app/model/User.php';
include __DIR__ . '/app/model/Music.php';

$connection = connection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

requesting($uri, $rotas);
