<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <header class="bg-gray-900 p-4 flex items-center justify-between">
      
        <div class="text-white text-2xl font-bold">
            <span>Logo</span>
        </div>
  
      
        <div class="flex items-center space-x-4">
            <input type="text" placeholder="Pesquisar"
            class="hidden md:block px-2 py-1 border border-gray-300 rounded-md">
  
          
            <button class="md:hidden p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                    d="M15 15l5.5 5.5M9 17a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
            </button>
      </div>
  
     
        <nav class="flex space-x-6">
            <a href="/" class="text-white">Home</a>
            <a href="#" class="text-white">Perfil</a>
        </nav>
    </header>
  
    <main class="flex-grow">
        @yield('content')
    </main>
    
    <footer class="bg-gray-300 p-4 text-center">
        <p>&copy; 2023 library.</p>
    </footer>
</body>
</html>