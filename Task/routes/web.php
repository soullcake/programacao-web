<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


Route::view('/','home');


Route::get('/create', function(){
    return view('user.create');
});

Route::post('/store', function(Request $request){
    $usuario = new User;
    $password = Hash::make($request->input('password'));

    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->password = $password;

    $usuario->save();
    return redirect('/');
});
