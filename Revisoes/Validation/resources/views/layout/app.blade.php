<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body class="flex flex-col min-h-screen bg-cyan-900">

    <header class="bg-emerald-600 text-white py-2">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">@yield('title')</h1>
        </div>
    </header>

    <div class="container mx-auto mt-8 flex-grow">
        @yield('content')
    </div>

    <footer class="bg-emerald-600 text-white py-2">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Add Players</p>
        </div>
    </footer>

</body> 
</html>
