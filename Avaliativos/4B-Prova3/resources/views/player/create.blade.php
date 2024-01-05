<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Players</title>
</head>
<body>
    <h1>Cadastro de Players | {{ Auth::user()->name }}</h1>
    <form action="{{ route('player.store') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Player">
        <input type="number" name="numero" placeholder="Numero do Player">

        <button type="submit">Entrar</button>
    </form>
</body>
</html>