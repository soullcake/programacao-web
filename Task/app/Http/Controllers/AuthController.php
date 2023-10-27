<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

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

        return redirect(url('/dashboard', [
            'name' =>$usuario->name
        ]));
    }


    public function loginCreate(){
        return view('auth.register');
    }

    public function loginCheck(){
        #code
    }

    public function logout() {
        #code
    }
}
