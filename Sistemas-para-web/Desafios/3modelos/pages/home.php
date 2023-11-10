<?php
if(!isset($_SESSION['nome'])){
    header('Location: /forms-register');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <a href="/pages/addLivros.html">Adicionar livro</a>
        <br><br>
        <a href="">Adicionar Colecao</a>
        <br><br>
        <a href="">Emprestimo</a>
        </div>
    
</body>
</html>