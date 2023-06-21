<?php

if (! isset($_SESSION['username'])) {
    
    header('location: /create');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Sobre</a>
            <a href="#">Contatos</a>
            <a href="#">Comnunidade</a>
            <button class="btn-settings">Publicar</button>
        </nav>
    </header>
    <div class="container home">
        <div class="question-box">
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit...</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ut earum corporis? Culpa</p>
            
            <a href="#">ver respostas</a>
        </div>
        <div class="question-box">
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit...</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ut earum corporis? Culpa</p>
            
            <a href="#">ver respostas</a>
        </div>
        <div class="question-box">
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit...</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ut earum corporis? Culpa</p>
            
            <a href="#">ver respostas</a>
        </div>
        <div class="question-box">
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit...</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ut earum corporis? Culpa</p>
            
            <a href="#">ver respostas</a>
        </div>
        <div class="question-box">
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit...</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ut earum corporis? Culpa</p>
            
            <a href="#">ver respostas</a>
        </div>
        <div class="question-box">
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit...</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ut earum corporis? Culpa</p>
            
            <a href="#">ver respostas</a>
        </div>
    </div>
</body>
</html>