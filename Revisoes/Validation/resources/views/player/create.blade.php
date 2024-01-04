@extends('layout.app')

@section('title', 'Cadastro de Players')
    
@section('content')

<div class="container mx-auto mt-8 p-8 bg-white max-w-md rounded-md shadow-md">
    <h1 class="text-2xl font-bold mb-4">Cadastro</h1>

    <form action="{{ route('player.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nome" class="block text-sm font-semibold text-gray-700">Nome:</label>
            <input type="text" name="nome" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-700">Numero do Player:</label>
            <input type="number" name="numero" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Enviar</button>
    </form>
</div>

@endsection