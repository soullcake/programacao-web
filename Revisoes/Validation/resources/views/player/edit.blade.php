@extends('layout.app')

@section('title', 'Editando {{ $player->nome }}')
    
@section('content')

<div class="container mx-auto mt-8 p-8 bg-white max-w-md rounded-md shadow-md">
    <h1 class="text-2xl font-bold mb-4">Editando</h1>

    <form action="{{ route('player.update', ['id' => $player->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-4">
            <label for="nome" class="block text-sm font-semibold text-gray-700">Nome:</label>
            <input type="text" name="nome" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required value="{{ $player->nome}}">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-700">Numero do Player:</label>
            <input type="number" name="numero" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required value="{{ $player->numero}}">
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Enviar</button>
    </form>
</div>

@endsection