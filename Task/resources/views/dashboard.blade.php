<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="flex flex-col min-h-screen bg-gray-200 ">
    <header class="bg-gray-900 p-4">
        <h1 class="text-white text-2xl font-bold m-auto">
            Dashboard
        </h1>
    </header>
    {{-- <h2>{{ Auth::user()->name }}</h2> --}}
    
    <div class="max-w-2xl mx-auto mt-8">
        <div class="flex justify-center">
            <div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-4">
                <div class="px-4 py-2">
                    <h2 class="font-bold text-2xl mb-2">{{ $name }}</h2>
                    <p class="text-gray-700 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, quibusdam impedit voluptate dicta architecto quas distinctio. Sapiente soluta</p>
                    <br>
                </div>
                <div class="flex justify-end mt-4 px-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
   
</body>
</html>

 