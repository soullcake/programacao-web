<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros</title>
    <style>
        .container {
            height: 600px;
            min-width: 700px;
            max-width: 1000px;
            margin: auto;
            padding-bottom: 40px;
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard - Livros</h1>
        @foreach ($livros as $livro)
        <h2>
            <a href="{{ route('livro.show', $livro) }}"> {{ $livro->titulo }}</a><br>
        </h2>
        @endforeach
    </div>
</body>
</html>