<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    
    <header class="bg-green-800 p-4">
        <nav class="container mx-auto flex justify-between items-center">
            <div class="text-white font-bold text-xl">@yield('title')</div>
            <ul class="flex space-x-4">
                <li><a href="/" class="text-white">HOME</a></li>
                <li><a href="/tasks" class="text-white">TASKS</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')

</body>
</html>
