<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-yellow-50 flex flex-col min-h-screen">

    <header class="bg-emerald-600 p-4 text-center">

        <h1 class="text-2xl font-bold mx-auto text-white">Pagina Inicial</h1>   
    </header>
    
        <a href="{{ route('userCreate') }}" class="max-w-xs mx-auto bg-white shadow-lg rounded-lg overflow-hidden border-4 border-emerald-600 mt-36">
            <div class="px-4 py-2">
                <h2 class="text-2xl font-bold text-center">Cadastro</h2>
                <p class="mt-2 text-gray-600 text-center">Clique aqui para se cadastrar como usuario</p>
            </div>
        </a>

</body>

</html>