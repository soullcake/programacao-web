<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Index Salas</title>
</head>
<body class="bg-gray-200">

  <header class="bg-green-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-2xl font-semibold">Sistema de Salas</h1>
    </div>
  </header>

  <div class="container mx-auto mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      
     @foreach ($salas as $sala)
      <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold mb-2">Sala {{$sala->nome}}</h2>
        <p class="text-gray-600">Capacidade: {{$sala->capacidade}} pessoas</p>
        <button class="mt-2 bg-green-500  text-white px-3 py-1 rounded-md">Entrar</button>
        <span class="ml-2 text-blue-500">Disponível</span> 
      </div>
     @endforeach

    </div>
  </div>



</body>
</html>
