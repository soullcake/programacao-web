<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerCreate() {
        return view('auth.register');
    }

    public function registerStore(Request $request) {
        
        $user = new User;   
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);   

        $user->save();

        return redirect('/dashboard');
    }


    public function loginCreate() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $dados = $request->only('email', 'password');
    
        $usuario = User::where('email', $dados['email'])->first();

        if ($usuario && password_verify($dados['password'], $usuario->password)) {
        
            Auth::login($usuario);
            return redirect()->intended('/dashboard');
        } else {
            return back()->withInput();
        }
    }
}
