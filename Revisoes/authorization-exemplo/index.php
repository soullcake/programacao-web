<?php 

session_start();

include __DIR__ . '/database.php';

include __DIR__ . '/Models/User.php';
include __DIR__ . '/Models/Book.php';

include __DIR__ . '/auth.php';
include __DIR__ . '/Route.php';
include __DIR__ . '/App.php';

include __DIR__ . '/web.php';


//inicia a aplicação
$app = new App('Exemplo');
//despacha a request atual para tratamento
$app->dispatch();