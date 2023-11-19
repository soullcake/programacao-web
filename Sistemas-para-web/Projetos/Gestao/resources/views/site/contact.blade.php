@extends('layouts.site')

@section('title', 'Contato')

@section('content')
    <div class="form-container">
        <h2>Converse Conosco</h2>
        <form>
        
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required>
            </div>
            
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Telefone</label>
                <textarea name="mensagem" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection