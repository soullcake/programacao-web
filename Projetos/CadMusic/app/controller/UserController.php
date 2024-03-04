<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    if (isset($_POST['username'], $_POST['passwd'])) {
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];

        $model = new User(connection());    
        $data = $model->save($username, $passwd);
    
        if ($data) {            
            $_SESSION['username'] = $username;
            header('Location: /');
        }
    } else {
       
        if ($model->save($username, $passwd)) {
          $_SESSION['username'] = $username;
          header('Location: /');
        } else {
            header('Location: /login');
        }
    }
} else {
    header('location: /login');
}



