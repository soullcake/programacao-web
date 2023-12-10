<?php

$method = $_SERVER['REQUEST_METHOD'];
echo $_POST['titulo'];
if ($method == 'POST') {
    if (isset($_POST['titulo'], $_POST['autor'], $_POST['editora'])) {
        echo "entrou aqui";
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];

        $model = new Book(connection()); 
 
        $data = $model->saveBook($titulo, $autor, $editora);   
    
        if ($data) {  
           
            header('Location: /dashboard');
        } else {
            header('Location: /');
        }
    } else {
        header('Location: /');
    }
} else {
    header('location: /');
}