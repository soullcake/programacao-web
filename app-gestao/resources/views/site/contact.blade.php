@extends('site.layouts.basic')

@section('title', 'Contato')

@section('content')
    <div class="container mt-4">
        <h1>Entre em Contato</h1>
        <p>Use o formulário abaixo para nos enviar uma mensagem.</p>

        <form action="{{ route('site.contato') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="message">Mensagem:</label>
                <textarea class="form-control" id="message" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>    
@endsection