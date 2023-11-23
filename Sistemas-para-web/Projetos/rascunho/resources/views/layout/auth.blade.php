<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  
        @yield('titulo-pagina', 'Document')
    </title>
    
    <link rel="stylesheet" href="css/app.css">

</head>
<body>
    <div class="container">
        <h1>
            @yield('titulo')
        </h1>
        @yield('conteudo')
    </div>    
</body>
</html>