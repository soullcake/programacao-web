<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Formulário de Carro</title>
</head>
<body class="bg-yellow-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-24">
        <h1 class="text-2xl font-bold mb-4">Informações do Automovel</h1>

        <form action="{{ route('automovel.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="modelo" class="block text-sm font-medium text-gray-600">Modelo</label>
                <input type="text" name="modelo" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="ano" class="block text-sm font-medium text-gray-600">Ano</label>
                <input type="text" name="ano" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="fabricante" class="block text-sm font-medium text-gray-600">Fabricante</label>
                <input type="text" name="fabricante" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="quilometragem" class="block text-sm font-medium text-gray-600">Quilometragem</label>
                <input type="text" name="quilometragem" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Enviar</button>
        </form>
    </div>

</body>
</html>
