
@extends('layouts.forms')

@section('title', 'TASK CREATE')
    
@section('action')
    {{ route('task.store') }}
@endsection

@section('inputs')
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Descrição</label>
        <input type="text" name="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-500" placeholder="Digite a descrição aqui" required>
    </div>

    @error('description')
        {{$message}}
    @enderror
@endsection
