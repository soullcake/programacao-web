<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function registerCreate(){
        return view('auth.register');
    }

    public function registerStore(Request $request){
        $usuario = new User;
        //criar hash da senha do usuario:
        $password = Hash::make($request->input('password'));

        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = $password;

        $usuario->save();
        Auth::login($usuario);
        return redirect(url('/dashboard'));
    }


    public function loginCreate(){
        return view('auth.login');
    }

    public function loginCheck(Request $request){
        $dados = $request->only('email', 'password');
        
        if(Auth::attempt($dados)){
            return redirect()->intended('/dashboard');
        } else {
            return back()->withInput();
        }
    }

    public function logout(Request $request) {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
