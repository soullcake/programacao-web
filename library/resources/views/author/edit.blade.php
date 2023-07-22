@extends('layouts.main')

@section('title', 'Editar Autor')

@section('content')

<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold mb-4">Editando {{ $author->name }}</h2>
    <form action="{{ route('author.update', $author) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium">Nome:</label>
            <input type="text" id="name" name="name" class="mt-1 px-4 py-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" value="{{ $author->name }}">
        </div>
        <div class="mb-4">
            <label for="age" class="block text-gray-700 font-medium">Idade:</label>
            <input type="number" id="age" name="age" class="mt-1 px-4 py-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" value="{{ $author->age }}">
        </div>
        <div class="mb-4">
            <label for="nationality" class="block text-gray-700 font-medium">Nacionalidade:</label>
            <input type="text" id="nationality" name="nationality" class="mt-1 px-4 py-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" value="{{ $author->nationality }}">
        </div>
        <div class="mb-4">
            <label for="birthdate" class="block text-gray-700 font-medium">Data de Nascimento:</label>
            <input type="date" id="birthdate" name="birthdate" class="mt-1 px-4 py-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" value="{{ $author->birthdate }}">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Salvar</button>

    </form>
</div>

@endsection