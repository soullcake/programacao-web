@extends('layouts.app')

@section('title', 'TASK SHOW')
    
@section('content')

<div class="container mx-auto mt-8 p-4 bg-white shadow-md rounded-md">
    <h1 class="text-2xl font-bold mb-4">Detalhes da tasks</h1>

    <p><strong>Descrição:</strong> {{ $task->description }}</p>

    <div class="flex mt-4">
        <!-- Botão de Editar -->
        <a href="{{ route('task.edit', ['id' => $task->id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2">Editar</a>

        <!-- Botão de Deletar (você pode usar um formulário para segurança adicional) -->
        <form action="{{ route('task.destroy', ['id' => $task->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Deletar</button>
        </form>
    </div>
</div>
@endsection