<?php

// função que avalia se o usuário está logado
// internamente a função encapsula a função hasUser()
loggedIn();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include __DIR__ . '/../../pages/emprestimo/create.html';

}