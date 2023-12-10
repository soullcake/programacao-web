<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-gray-900 p-4">
        <h1 class="text-white text-2xl font-bold m-auto">
            Dashboard
        </h1>
    </header>
    <div class="my-16 mx-auto w-2/6 h-auto border-2 border-black rounded-xl p-4">
        <h2 class="text-black text-2xl font-bold m-auto pb-16">Matricula:  {{ $rg }}</h2>

        <a href="{{ route('instCreate', $rg) }}" class="text-black text-2l underline p-2" >Cadastrar Instrumento</a>
    </div>

</body>
</html>