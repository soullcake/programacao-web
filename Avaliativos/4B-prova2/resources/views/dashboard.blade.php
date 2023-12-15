

@extends('layouts.app')

@section('title')
    @auth
    {{ strtoupper(Auth::user()->name) }}   
    @endauth
@endsection
    
@section('content')

<form action="{{route('logout')}}" method="POST" class="mt-48">
    @csrf
    <button href="{{ route('logout') }}" type="submit" class="bg-green-500 text-white px-8 py-4 rounded-full font-bold text-xl mx-auto">Logout</button>
</form> 

@endsection