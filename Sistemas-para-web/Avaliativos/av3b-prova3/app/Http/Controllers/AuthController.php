<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerCreate() {
        return view('auth.register');
    }

    public function registerStore(Request $request) {
        #code
    }


    public function loginCreate() {
        return view('auth.login');
    }

    public function loginStore(Request $request) {
        #code
    }
}
