<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $model = new User(connection());    
        $data = $model->save($username, $email, $password);
    
        if ($data) {            
            $_SESSION['username'] = $username;
            header('Location: /');
        }
    } else {
       
        if ($model->save($username, $email, $password)) {
            $_SESSION['username'] = $username;        
            header('Location: /');
        } else {
            header('Location: /create');
        }
    }
} else {
    header('location: /create');
}