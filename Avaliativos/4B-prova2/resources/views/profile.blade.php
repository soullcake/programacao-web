@extends('layouts.app')

@section('title', 'Meu Perfil')
    
@section('content')
<div class="bg-white p-8 rounded shadow-md w-96">

    <!-- Título -->
    <h1 class="text-2xl font-bold mb-4">Perfil</h1>

    <!-- Verificação de usuário autenticado -->
    @if(isset($profile))
        <!-- Informações do usuário -->
        <div class="mb-4">
            <label class="text-gray-600">Nome:</label>
            <p class="font-semibold">{{ $profile->name }}</p>
        </div>

        <div class="mb-4">
            <label class="text-gray-600">Email:</label>
            <p class="font-semibold">{{ $profile->email }}</p>
        </div>

        <!-- Adicione outros campos conforme necessário -->

    @else
        <!-- Mensagem para usuário não autenticado -->
        <p class="text-red-500">Nenhum usuário autenticado.</p>
    @endif

</div>
@endsection