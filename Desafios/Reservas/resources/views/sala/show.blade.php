<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Sala {{$sala->nome}}</title>
</head>
<body class="bg-gray-100">

  <header class="bg-green-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-2xl font-semibold">Detalhes da Sala {{ $sala->nome}}</h1>
    </div>
  </header>

  <div class="container mx-auto mt-8">
    <div class="bg-white p-4 rounded-lg shadow-md">
      <p class="text-gray-600">Capacidade: {{ $sala->capacidade }} pessoas</p>
      <p class="text-gray-600">Status: Disponível</p>
      <p class="text-gray-600">Recursos: Projetor, Wi-Fi</p>
      <p class="text-gray-600">Descrição: Esta é uma sala de reuniões confortável com equipamentos modernos.</p>
      <button class="mt-4 bg-green-500 text-black px-3 py-1 rounded-md">Reservar</button>
    </div>
  </div>

</body>
</html>
