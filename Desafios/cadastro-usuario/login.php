<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    if (isset($_POST['email'], $_POST['password'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $model = new User(connection());    
        $data = $model->find($email);   
    
        if ($data && password_verify($password, $data['password'])) {
            $_SESSION['username'] = $data['username'];
            header('Location: /');
        } else {
            header('Location: /create');
        }
    } else {
        header('Location: /create');
    }
} else {
    header('location: /create');
}
