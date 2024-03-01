<?php

$rotas = [
    '/' => '/pages/home.html',
];

function requesting($uri, $rotas) {   

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/error.php';
    }

}