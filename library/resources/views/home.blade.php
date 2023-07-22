@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="container mx-auto p-4">
  <h1 class="text-3xl font-semibold mb-4">Pagina Home</h1>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <!-- Função 1 -->
    <div class="bg-white p-4 rounded-lg shadow">
      <h2 class="text-xl font-semibold mb-2">Cadastrar Autores</h2>
      <p>Cria um novo registro de Autores</p>
      <a href="{{ route('author.create') }}" class="mt-2 inline-block text-blue-500 hover:underline">Acessar</a>
    </div>

    <!-- Função 2 -->
    <div class="bg-white p-4 rounded-lg shadow">
      <h2 class="text-xl font-semibold mb-2">Visualizar Autores</h2>
      <p>Exibe todos os cadastros de autores criados</p>
      <a href="{{ route('author.index') }}" class="mt-2 inline-block text-blue-500 hover:underline">Acessar</a>
    </div>
    
    {{-- <div class="bg-white p-4 rounded-lg shadow">
      <h2 class="text-xl font-semibold mb-2">Função 3</h2>
      <p>Descrição breve da Função 3.</p>
      <a href="#" class="mt-2 inline-block text-blue-500 hover:underline">Acessar</a>
    </div>

    
    <div class="bg-white p-4 rounded-lg shadow">
      <h2 class="text-xl font-semibold mb-2">Função 4</h2>
      <p>Descrição breve da Função 4.</p>
      <a href="#" class="mt-2 inline-block text-blue-500 hover:underline">Acessar</a>
    </div> --}}
  </div>
</div>
    
@endsection