<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-100">

  <header class="bg-gray-800 text-white py-4 text-center">
    <h1 class="text-2xl font-semibold">Login de Usuário</h1>
  </header>

  <div class="flex items-center justify-center h-screen">
    <form class="bg-white p-8 rounded shadow-md w-96" action="{{ route('login') }}" method="POST">
      @csrf
      <label for="email" class="block text-sm font-medium text-gray-600 mb-2">Email:</label>
      <input type="email"  name="email" class="w-full border p-2 rounded mb-4" required>

      <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Senha:</label>
      <input type="password"  name="password" autocomplete="new-password" class="w-full border p-2 rounded mb-4" required>

      <button type="submit" class="bg-blue-800 text-white py-2 px-4 rounded hover:bg-blue-700">Entrar</button>
    </form>
  </div>

</body>
</html>
