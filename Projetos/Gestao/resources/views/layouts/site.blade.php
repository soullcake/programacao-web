<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <h1>@yield('title')</h1>
        <nav class="navigation">
            <a href="/">Home</a>
            <a href="/sobre">Sobre</a>
            <a href="/contato">Contatos</a>
        </nav>
    </header>
    <section>
        @yield('content')
    </section>
</body>
</html>