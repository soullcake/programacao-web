@extends('layout.auth')

@section('titulo-pagina')
    Tasks
@endsection

@section('titulo')
    Tasks
@endsection

@section('conteudo')
<form action="{{url('/tasks')}}" method="POST">
    @csrf
    <input type="text" name="description" placeholder="Criar nova tarefa...">
    <button>Enviar</button>
</form>
@endsection