<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuario</title>
</head>
<body>
    <h1>Login usuario</h1>

    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <input type="text"  name="name" required placeholder="Nome">
        <input type="email"  name="email" required placeholder="Email">
        <input type="password"  name="password" required placeholder="Senha">
  
        <button type="submit">Cadastrar</button>
      </form>
</body>
</html>