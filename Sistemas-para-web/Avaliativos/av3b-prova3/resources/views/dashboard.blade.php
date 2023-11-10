<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-100">
    <header class="bg-gray-800 text-white py-4 text-center">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
    </header>
    <div class="bg-yellow-300 py-4 text-center w-1/4 rounded-md border-2 border-gray-800 mx-auto mt-12">
        <a href="{{ route('imovel.create') }}" class="text-white font-semi-bild text-2xl">Cadastro de Imovel</a>
        <br><br>
        <a href="{{ route('automovel.create') }}" class="text-white font-semi-bild text-2xl">Cadastro de Automovel</a>
    </div>
    

</body>
</html>