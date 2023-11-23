<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use App\Models\User;
use Auth;

class RegisteredUsersController extends Controller
{
    //
    public function create() {
        return view ('auth.register');
    }

    public function store(Request $request)
    {
        //coleta dados da request
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        Auth::login($user);
        return redirect(url('/dashboard'));
    }
}
