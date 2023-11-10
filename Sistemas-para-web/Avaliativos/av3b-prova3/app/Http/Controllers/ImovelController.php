<?php

namespace App\Http\Controllers;
use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function create() {
        return view('imovel.create');
    }

    public function store(Request $request) {
        Imovel::create($request->all());

        return redirect()->route('imovel.show');
    }

    public function show() {
        $imovel = Imovel::latest()->first();

        return view('imovel.show', ['imovel' => $imovel]);
    }

}
