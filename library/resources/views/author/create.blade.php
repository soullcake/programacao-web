@extends('layouts.main')

@section('title', 'Cadastro - Autor')

@section('content')

<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold mb-4">Cadastrar Autor</h2>
    <form action="{{ route('author.store') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium">Nome:</label>
            <input type="text" id="name" name="name" class="mt-1 px-4 py-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="age" class="block text-gray-700 font-medium">Idade:</label>
            <input type="number" id="age" name="age" class="mt-1 px-4 py-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="nationality" class="block text-gray-700 font-medium">Nacionaldiade</label>
            <input  type="text" id="nationality" name="nationality" class="mt-1 px-4 py-2 w-full border rounded-md resize-none focus:outline-none focus:ring focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="birthdate" class="block text-gray-700 font-medium">Data de Nascimento</label>
            <input type="date" name="birthdate" id="birthdate" class="mt-1 px-4 py-2 w-full border rounded-md resize-none focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Enviar</button>
    </form>
</div>
    
@endsection