<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request) {
        $name = $request->input('name');

        return redirect()->route('dashboard',['name' => $name]);
    }

    
}
