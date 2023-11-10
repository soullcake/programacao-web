<?php

$rotas = [
    '/' => '/formulario.html',
    '/dashboard' => '/dashboard.php',
    '/cadastro' => '/cadastro.php',
];

function rotear ($uri, $rotas) {   
    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/error.php';
    }

}