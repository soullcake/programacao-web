@extends('layout.app')

@section('title')
Tarefas
@endsection

@section('content')
 
<div class="tarefas">
    {{-- receber uma lista de tarefas --}}
    @foreach ($tarefas as $item)
    <p>{{ $item->description }}</p>
    @endforeach
</div>
    
@endsection