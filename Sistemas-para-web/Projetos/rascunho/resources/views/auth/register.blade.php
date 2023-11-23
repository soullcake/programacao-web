@extends('layout.auth')

@section('titulo-pagina')
    Cadastro
@endsection

@section('titulo')
    Cadastro
@endsection

@section('conteudo')
<form action="{{url('/register')}}" method="POST">
    @csrf
    <label for="email">email</label>
    <input type="text" name="email">
    <label for="name">Nome</label>
    <input type="text" name="name">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password">
    <button>Enviar</button>
</form>
@endsection