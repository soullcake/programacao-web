<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrumentController extends Controller
{

    public function create(string $rg) {
        return view('instrument.create', ['rg' => $rg]);
    }
    
    public function store(Request $request, string $rg) {
        // quando for usar os dados do forms:
        // $instrument = $request->input('instrument');
            
        return redirect()->route('dashboard', ['rg' => $rg]);
    }
}
