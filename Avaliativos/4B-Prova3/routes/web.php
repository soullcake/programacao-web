<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// create
Route::get('/login', function() {
    return view('user.create');
});

//store
Route::post('/login', function(Request $request) {
    $dados = $request->only('email', 'password');
    $usuario = User::where('email', $dados['email'])->first();

    if ($usuario && password_verify($dados['password'], $usuario->password)) {
    
        Auth::login($usuario);
        return redirect('/player');
    } else {
        $user = new User;   
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);   
    
        $user->save();
        Auth::login($user);
    
        return redirect('/player');
    }
});

Route::get('/player', [PlayerController::class, 'index']);
Route::get('/player/create', [PlayerController::class, 'create'])->name('player.create');
Route::post('/player/store', [PlayerController::class, 'store'])->name('player.store');


Route::delete('/player/destroy/{id}', [PlayerController::class, 'destroy'])->name('player.destroy');