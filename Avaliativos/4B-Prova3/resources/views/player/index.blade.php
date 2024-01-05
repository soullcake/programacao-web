<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem</title>
</head>
<body>
    <h1>Listagem de Players</h1>
    <hr>
    @foreach ($players as $player)
        <p>Nome: {{$player->nome}}| Numero: {{ $player->numero }} </p>
        <form action="{{ route('player.destroy', ['id' => $player->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Deletar</button>
        </form>
        <br>
    @endforeach
    <a href="{{ route('player.create') }}">Adicionar jogadores</a>
</body>
</html>