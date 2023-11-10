<?php

$rotas = [
    '/' => '/pages/home.php',
    '/create' => '/pages/forms.html',
    '/login' => '/login.php',
    '/register' => '/register.php',
    
];

function rotear ($uri, $rotas) {   

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/error.php';
    }

}