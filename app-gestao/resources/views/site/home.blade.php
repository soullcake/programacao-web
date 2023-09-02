<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Inclua os arquivos CSS do Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Meu Projeto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Página Inicial <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Conteúdo da página -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Bem-vindo ao Meu Projeto</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, nunc eu feugiat suscipit, arcu elit blandit velit.</p>
            <a href="#" class="btn btn-primary">Saiba Mais</a>
        </div>
        <div class="col-md-6">
            <img src="https://via.placeholder.com/400x300" alt="Imagem de exemplo" class="img-fluid">
        </div>
    </div>
</div>
<hr>
<ul>
    <li>
        <a href="{{ route('site.index') }}">Pagina Principal</a>
    </li>
    <li>
        <a href="{{ route('site.about') }}">Sobre nos</a>
    </li>
    <li>
        <a href="{{ route('site.about') }}">Contato</a>
    </li>

</ul>
<hr>

<!-- Inclua os arquivos JavaScript do Bootstrap 4 (JQuery e Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>