<?php

$rotas = [
    '/' => '/pages/home.html',
    '/login/create' => '/pages/user/login.html',
    '/login/store' => '/app/controller/UserController.php',
    '/music/create' => '/pages/music/create.php',
    '/music/store' => '/app/controller/MusicController.php',
    
];

function requesting($uri, $rotas) {   

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/error.php';
    }

}