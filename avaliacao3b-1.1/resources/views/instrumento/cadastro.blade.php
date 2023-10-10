<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instrumento</title>
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
            Cadastrar Instrumento
        </h1>
    </header>
    
<div class="box">
    <form action="{{ route('instrumentoStore')}}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="instrumento" class="block mb-2 text-sm font-medium text-black">Nome do Instrumento</label>
            <input type="text" id="instrumento" class="border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
    
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
      </form>
</div>
</body>
</html>