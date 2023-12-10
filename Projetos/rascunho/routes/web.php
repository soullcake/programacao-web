<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Task;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisteredUsersController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {

    if (!Auth::check()) {
        return redirect(url('/'));
    }

    return view('dashboard');
});

Route::get('/login', [UserController::class,'create']);

Route::post('/login', [UserController::class,'store']);

Route::post('/logout', [UserController::class, 'destroy']);

Route::get('/register', [RegisteredUsersController::class,'create']);
Route::post('/register', [RegisteredUsersController::class,'store']);

Route::view('/layout-auth', 'layout.auth');

// tarefas
Route::get('/tasks', function(){

    if (!Auth::check()) {
        return redirect(url('/'));
    }

    $tarefas = Task::get();


    return view('tasks.index', [
        'tarefas' => $tarefas,
    ]);
});



















Route::post('/store', function(Request $request){
    //coleta dados da request
    $name = $request->post('name');
    $email = $request->post('email');
    $password = Hash::make($request->post('password'));
    //prepara objeto
    $usuario = new User;
    $usuario->name = $name;
    $usuario->email = $email;
    $usuario->password = $password;
    //aplica INSER INTO ...
    $usuario->save();
    return redirect(url('/show', ['id'=>$usuario->id]));
});

Route::get('/show/{id}', function(int $id){
    
});

