<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50">
    <header class="bg-emerald-600 text-white text-center py-4">
        <h1 class="text-2xl font-bold mx-auto text-white">Cadastro de Usuario</h1>
    </header>
    <main class="w-1/4 mx-auto">
        <form class="bg-white p-8 rounded shadow-lg border-4 border-emerald-600 mt-36 mx-auto"
        action="{{ route('userStore') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome de Usuário:</label>
                <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cadastrar</button>
        </form>
    </main>
</body>
</html>