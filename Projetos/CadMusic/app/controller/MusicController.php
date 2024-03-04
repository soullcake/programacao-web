<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    if (isset($_POST['title'], $_POST['artist'], )) {
        $title = $_POST['title'];
        $artist = $_POST['artist'];

        $model = new Music(connection()); 
        $data = $model->saveMusic($title, $artist);   
    
        if ($data) {  
            header('Location: /');
        } else {
            header('Location: /music/create');
        }
    } else {
        header('Location: /music/create');
    }
} else {
    header('location: /music/create');
}