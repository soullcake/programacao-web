<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>
    <form action="{{url('/login')}}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password">
        <button>Enviar</button>
    </form>
    
</body>
</html>