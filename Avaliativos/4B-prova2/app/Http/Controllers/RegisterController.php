<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    //
    public function create () {
        return view('auth.register.create');
    }

    public function store (StoreUserRequest $request) {

        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'ConfirmPassword' => 'required|same:password',
            'matricula' => 'required|min:15',
        ], [
            'ConfirmPassword.same' => 'As senhas devem ser iguais.',
            'matricula.min' => 'A matrícula deve ter no mínimo 15 caracteres.',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $usuario = new User;
        $usuario->name = $request->post('name');;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        
        Auth::login($usuario);

        return redirect('/dashboard');

    }

}
