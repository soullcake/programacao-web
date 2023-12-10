<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Formulário de Imóvel</title>
</head>
<body class="bg-yellow-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-24">
        <h1 class="text-2xl font-bold mb-4">Informações do Imóvel</h1>

        <form action="{{ route('imovel.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="localizacao" class="block text-sm font-medium text-gray-600">Localização</label>
                <input type="text" name="localizacao" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="valor" class="block text-sm font-medium text-gray-600">Valor</label>
                <input type="text" name="valor" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="quartos" class="block text-sm font-medium text-gray-600">Número de Quarto</label>
                <input type="number" name="numero_do_quarto" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="piscina" class="block text-sm font-medium text-gray-600">Piscina</label>
                <select name="piscina" class="mt-1 p-2 w-full border rounded-md">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Enviar</button>
        </form>
    </div>

</body>
</html>
