<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $model = new User(connection());    
        $data = $model->save($nome, $email, $senha);
    
        if ($data) {            
            $_SESSION['nome'] = $nome;
            header('Location: /dashboard');
        }
    } else {
       
        if ($model->save($nome, $email, $senha)) {
            $_SESSION['nome'] = $nome;        
            header('Location: /dashboard');
        } else {
            header('Location: /forms-register');
        }
    }
} else {
    header('location: /forms-register');
}