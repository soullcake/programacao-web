<?php

// função que avalia se o usuário está logado
// internamente a função encapsula a função hasUser()
loggedIn();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //obtendo o usuário
    $modelo = new User(connection());
    $user = $modelo->find($_SESSION['email']);

    //validando os dados
    if ($_POST['book_id'] && $user) {

        $user_id = $user['id'];
        $book_id = $_POST['book_id'];

        $emprestimo = new Emprestimo(connection());
        $result = $emprestimo->save($user_id, $book_id);

        //redirecionar para página de emprestimos
        //se for true, salvou
        if ($result) {
            header ('Location: /emprestimos/index');
        }
        

    }

    

    

}