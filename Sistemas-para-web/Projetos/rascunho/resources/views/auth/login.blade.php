{{-- herdando o layout de auth.blade.php --}}
@extends('layout.auth')

@section('titulo-pagina')
Login
@endsection

@section('titulo')
Login
@endsection

@section('conteudo')
<form action="{{url('/login')}}" method="POST">
    @csrf
    <label for="email">email</label>
    <input type="text" name="email">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password">
    <button>Enviar</button>
</form>
@endsection