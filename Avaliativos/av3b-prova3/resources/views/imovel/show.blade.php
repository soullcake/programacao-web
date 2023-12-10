<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Detalhes - Imovel</title>
</head>
<body class="bg-yellow-100">
    <header class="bg-gray-800 text-white py-4 text-center">
        <h1 class="text-2xl font-semibold">{{ Auth::user()->name }}</h1>
      </header>
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-24">
        <h1 class="text-2xl font-bold mb-4">Detalhes do Imovel</h1>

        <div class="mb-4">
            <strong>Localizacao:</strong> {{ $imovel->localizacao}}
        </div>
        <div class="mb-4">
            <strong>Valor:</strong> {{ $imovel->valor}}
        </div>
        <div class="mb-4">
            <strong>Numero de Quarto:</strong> {{ $imovel->numero_do_quarto}}
        </div>

        @if ($imovel->piscina == 1)
            <div class="mb-4">
                <strong>Piscina:</strong> Sim
            </div>
        @else
            <div class="mb-4">
                <strong>Piscina:</strong> Nao
            </div>
        @endif

        

        <a href="{{ url()->previous() }}" class="text-blue-500 hover:underline">Voltar</a>
    </div>

</body>
</html>
