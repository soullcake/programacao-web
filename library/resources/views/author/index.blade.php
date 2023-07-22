@extends('layouts.main')

@section('title', 'Autor')

@section('content')

@foreach ($authors as $author)
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-8">
    <div class="flex items-center">
        <img src="https://cdn1.iconfinder.com/data/icons/ui-essential-17/32/UI_Essential_Outline_1_essential-app-ui-avatar-profile-user-account-256.png" alt="Foto do Autor" class="w-24 h-24 rounded-full">
        <div class="ml-4">
            <h2 class="text-xl font-semibold">
                <a href="{{ route('author.show', $author) }}"> {{ $author->name }}</a><br>
            </h2>
        </div>
    </div>
</div>
@endforeach

@endsection
