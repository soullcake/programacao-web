@extends('layout.app')

@section('title', 'Players')
    
@section('content')
<table class="container mx-auto mt-8 p-4 bg-white shadow-md rounded-md mb-24">
    <thead>
        <tr>
            <th class="p-2 border border-gray-300">Players</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $player)
            <tr>
                <td class="p-2 border border-gray-300">{{ $player->nome }}</td>
                <th class="p-2 border border-gray-300 text-green-500"><a href="{{ route('player.edit', ['id' => $player->id])}}">Editar</a></th>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('player.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Cadastrar Jogador</a>

@endsection