
@extends('layouts.forms')

@section('title', 'SHARE CREATE')
    
@section('action')
    {{ route('shareTask') }}
@endsection

@section('inputs')
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">ID da Task</label>
        <input type="number" name="task_id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-500" placeholder="Digite o ID da Task" required>
    </div>

    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Compartilhar com...</label>
        <input type="number" name="user_id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-500" placeholder="Digite o ID do Usuario" required>
    </div>

    @error('description')
        {{$message}}
    @enderror
@endsection