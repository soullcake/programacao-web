<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="flex flex-col min-h-screen bg-gray-200 ">
    <header class="bg-gray-900 p-4">
        <h1 class="text-white text-2xl font-bold m-auto">
            Pagina Inicial
        </h1>
    </header>

<div class="my-16 mx-auto w-2/6 h-auto border-2 border-black rounded-xl p-4">
    <h2 class="my-2.5"><a href="{{ route('usuarioCadastro') }}" class="text-black text-2l underline p-2">Cadastro de usuario</a></h2>
    <h2 class="my-2.5"><a href="{{ route('instrumentoCadastro') }}" class="text-black text-2l underline p-2">Cadastro de intrumento</a></h2>
    <h2 class="my-2.5"><a href="{{url('/sobre') }}" class="text-black text-2l underline p-2">Sobre</a></h2>
</div>
    
</body>
</html>