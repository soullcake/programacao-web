<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editando  - {{ $livro->titulo }}</title>
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

        form {
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastre um Livro</h2>
        <form action="{{ route('livro.update') }} " method="POST">
            @csrf
            @method("PUT")
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value=" {{ $livro->titulo}}">
            <br>
            <label for="autor">Autor</label>
            <input type="text" name="autor" value=" {{ $livro->autor}}">
            <br>
            <label for="genero">Genero</label>
            <input type="text" name="genero" value=" {{ $livro->genero}}">
            <br>
            <button style="margin-top: 25px">Enviar</button>
        </form>
    </div>
</body>
</html>