<?php

$rotas = [

    '/' => '/pages/home.php',
    '/dashboard' => '/pages/dashboard.php',
    
    // registrar usuario:
    '/forms-register' => '/pages/register.html',
    '/forms-login' => '/pages/login.html',
    '/login' => '/controllers/auth/login.php',
    '/register' => '/controllers/auth/register.php',

    '/logout' => '/controllers/auth/logout.php',

    '/addlivros' => '/controllers/feature/addlivros.php'
];

function rotear ($uri, $rotas) {   

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/error.php';
    }

}