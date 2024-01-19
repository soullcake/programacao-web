<?php

namespace App\Http\Controllers;
use App\Models\Sala;
use Illuminate\Http\Request;
use App\Http\Controllers\ReservaController;

class SalaController extends Controller
{
    public function index() {
        $salas = Sala::all();

        return view('sala.index', ['salas' => $salas]);
    }

    public function show(Sala $id) {
        return view('sala.show', ['sala' => $id]);
    }
    
}
