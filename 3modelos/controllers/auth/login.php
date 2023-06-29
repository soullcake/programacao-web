<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    if (isset($_POST['email'], $_POST['senha'])) {
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $model = new User(connection());    
        $data = $model->find($email);   
    
        if ($data && password_verify($senha, $data['senha'])) {
            $_SESSION['nome'] = $data['nome'];

            header('Location: /dashboard');
        } else {
            header('Location: /forms-login');
        }
    } else {
        header('Location: /forms-login');
    }
} else {
    header('location: /forms-login');
}