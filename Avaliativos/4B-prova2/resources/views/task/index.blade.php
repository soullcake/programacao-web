@extends('layouts.app')

@section('title', 'TASKS INDEX')
    
@section('content')
    <table class="container mx-auto mt-8 p-4 bg-white shadow-md rounded-md mb-24">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300">Descrição da Tarefa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista as $item)
                <tr>
                    <td class="p-2 border border-gray-300">{{ $item->description }}</td>
                    <th class="p-2 border border-gray-300 text-green-500"><a href="{{ route('task.show', ['id' => $item->id])}}">Detalhes</a></th>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>
    <br>
    <table class="container mx-auto mt-8 p-4 bg-white shadow-md rounded-md mb-24">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300">Tarefas Compartilhadas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista2 as $item2)
                <tr>
                    <td class="p-2 border border-gray-300">{{ $item2->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('task.create') }}" type="submit" class="bg-green-500 text-white px-8 py-4 rounded-full font-bold text-xl">Criar nova Task</a>

    <a href="{{ route('share.create') }}" type="submit" class="bg-blue-500 text-white px-8 py-4 rounded-full font-bold text-xl">Compartilhar Task</a>
@endsection

