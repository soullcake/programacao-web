<?php

if(!isset($_SESSION['username'])){
    header('Location: /login/create');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/music.css">
</head>
<body>
    <header>
        <h1 class="site-title">CadMusic</h1>
    </header>

    <section>
    <div class="music-container">
        <h2>Indique uma musica!</h2>
        <form class="music-form" action="/music/store" method="post">
            <input type="text" name="title" placeholder="titulo" required>
            <input type="text" name="artist" placeholder="artista" required>
            <input type="submit" value="Enviar Musica">
        </form>
    </div>
    </section>

    <footer>
        <p>Contato: cadmusic_contato@hotmail.com | Telefone: (99) 999-9999</p>
        <p>&copy; 2024 CadMusic. Todos os direitos reservados.</p>
    </footer>
</body>
</html>


