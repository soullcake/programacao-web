<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre-se</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>

        .box{
            width: 600px;
            border: 3px solid black;
            border-radius: 24px;
            margin: 200px auto auto auto;
            padding: 20px;
        }

    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-200 ">
    <header class="bg-gray-900 p-4">
        <h1 class="text-white text-2xl font-bold m-auto">
            Cadastro de Usuario
        </h1>
    </header>
    
<div class="box">
    <form action="{{ route('userStore') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="rg" class="block mb-2 text-sm font-medium text-black">Matricula</label>
            <input type="text" name="rg" class="border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            <br>
            <label for="psswd" class="block mb-2 text-sm font-medium text-black">Senha</label>
            <input type="password" name="psswd" class="border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
    
        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Cadastrar</button>
      </form>
</div>
  
</body>
</html>