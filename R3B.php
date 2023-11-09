<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Hash;

Route::get('/register', function(){
    return view('register');
});

Route::get('/dasboard', function() {
    
    $user = User::find(1);

    $books = Book::all(); //select * from books;

    return view('dashboard', [
        'name' => $user->name,
        'books' => $books,
    ]);

})->name('dashboard');

Route::post('/register', function(Request $request){
    $user = new User;

    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($password);

    // salvando usuario
    $user->save();
    return redirect()->route('dashboard');
});
    // <h1>Bem vindo, {{$name}}</h1>
    // <a href="{{route('instrument')}}">Cadastrar Livro</a>

    // @foreach ($books as $book)
    // <p>{{$book->id}} | {{$book->title}}</p>       
    // @endforeach





