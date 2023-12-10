<?php

namespace App\Http\Controllers;
use App\Models\Automovel;
use Illuminate\Http\Request;

class AutomovelController extends Controller
{
    public function create() {
        return view('automovel.create');
    }

    public function store(Request $request) {
        Automovel::create($request->all());

        return redirect()->route('automovel.show');
    }

    public function show() {
        $automovel = Automovel::latest()->first();

        return view('automovel.show', ['automovel' => $automovel]);
    }
}
