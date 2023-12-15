@extends('layouts.app')

@section('title', 'Pagina Inicial')
    
@section('content')
    <section class="container mx-auto mt-8 flex justify-center items-center">
        <a href="{{ url('/dashboard')}}" class="bg-green-500 text-white px-8 py-4 rounded-full font-bold text-xl">Dashboard</a>
    </section>
@endsection