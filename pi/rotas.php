<?php

$rotas = [
    '/' => '/pages/home.html',
    '/login' => '/pages/login-register.html',
    '/cadastro' => 'login-register.php' 
    
];

function rotear ($uri, $rotas) {

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/error.php';
    }

}