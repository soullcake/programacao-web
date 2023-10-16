<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $album }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50">
    <header class="bg-emerald-600 text-white text-center py-4">
        <h1 class="text-2xl font-bold mx-auto text-white">{{ $artist }} - {{ $album }}</h1>
    </header>
    
    <div class="w-2/6 bg-white p-8 rounded shadow-lg border-4 border-emerald-600 mt-36 mx-auto">
        <h2 class="text-xl font-bold mx-auto text-black text-center"> {{ $name}} || {{$album}} </h2>
        <br>
        <a href="" class="p-4 text-black text-xl underline">Dashboard</a>
        <br><br><br>
        <a href="" class="p-4 text-black text-xl underline">Cadastro de usuario</a>
    </div>
</body>
</html>