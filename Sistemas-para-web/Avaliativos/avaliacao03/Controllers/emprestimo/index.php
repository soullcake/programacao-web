<?php

if (!hasUser()) {

    header ('Location: /');

} else {

    $emprestimos = Emprestimo::all(connection());
    
    include __DIR__ . '/emprestimos/index';      
}