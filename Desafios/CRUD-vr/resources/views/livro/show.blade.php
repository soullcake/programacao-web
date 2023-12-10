<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $livro->titulo }}</title>
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
        .card {
            height: 250px;
            width: 600px;
            border: 1px solid black;
            border-radius: 25px;
            display: flex;
            align-content: center;
            flex-direction: column;
            align-items: center
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>{{ $livro->titulo }}</h2>
            <p>Autor: {{ $livro->autor }}</p>
            <p>Genero: {{ $livro->genero }}</p>
        </div>
        <div>
            <a href="{{ route('livro.edit', $livro) }}">
                Editar
            </a>

            <form action="{{ route('livro.destroy', $livro) }}" method="post">
                @csrf
                @method('DELETE')
                <button>Deletar</button>
            </form>
        </div>
        
    </div>
</body>
</html>