@extends('layouts.main')

@section('title', 'Autor')

@section('content')

<div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-8">
    <div class="my-auto">

        <div class="ml-4">
            <h2 class="text-xl font-semibold">{{ $author->name }}</h2>
            <p class="text-gray-600">Idade: {{ $author->age }}</p>
            <p class="text-gray-600">Nacionaldiade: {{ $author->nationality }}</p>
            <p class="text-gray-600">Data de Nascimento: {{ $author->birthdate }}</p>
        </div>
        <br>
        <div class="flex space-x-4">
            <a href="{{ route('author.edit', $author) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow">
                Editar
            </a>
            <form action="{{ route('author.destroy', $author) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow">Deletar</button>
            </form>
        </div>
    </div>
</div>


@endsection