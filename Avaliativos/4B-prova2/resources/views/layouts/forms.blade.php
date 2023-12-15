<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="@yield('action')" method="POST" class="container mx-auto mt-48 p-4 bg-white shadow-md rounded-md max-w-md border-4 border-solid border-gray-800">
        @csrf

        @yield('inputs')

        <button type="submit" class="bg-green-500 text-white px-8 py-4 rounded-full font-bold text-xl">Enviar</button>
    </form>
</body>
</html>