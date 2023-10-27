<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="flex flex-col min-h-screen bg-gray-200 ">
    <header class="bg-gray-900 p-4">
        <h1 class="text-white text-2xl font-bold m-auto">
            Cadastro de Usuario
        </h1>
    </header>
    
    <div class="flex justify-center mt-20"> 
        <form class="bg-white p-8 rounded shadow-lg" method="POST" action="{{ route('registerStore') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block font-bold text-gray-700 mb-2">Nome</label>
                <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="email" class="block font-bold text-gray-700 mb-2">Email</label>
                <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="password" class="block font-bold text-gray-700 mb-2">Senha</label>
                <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none">
            </div>
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Enviar</button>
        </form>
    </div>

</body>
</html>