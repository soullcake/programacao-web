<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="flex flex-col min-h-screen bg-gray-200">
    <header class="bg-gray-900 p-4">
        <h1 class="text-white text-2xl font-bold m-auto">
            Pagina Inicial
        </h1>
    </header>

    <div class="max-w-2xl mx-auto mt-8">
        <div class="flex justify-center">
            <div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-4">
                <div class="px-4 py-2">
                    <h2 class="font-bold text-2xl mb-2">Register</h2>
                    <p class="text-gray-700 text-sm">Cadastre uma conta e inicie uma sessao.</p>
                    <br>
                </div>
                <div class="flex justify-end mt-4 px-4">
                    <a href="{{ route('registerCreate') }}" class="text-blue-500 font-bold">Cadastrar</a>
                </div>
            </div>

            <div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-4 ml-4">
                <div class="px-4 py-2">
                    <h2 class="font-bold text-2xl mb-2">Login</h2>
                    <p class="text-gray-700 text-sm">Ja possui um cadastro? entre com sua conta</p>
                </div>
                <div class="flex justify-end mt-4 px-4">
                    <a href="{{ route('loginCreate') }}" class="text-blue-500 font-bold">Logar</a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>

