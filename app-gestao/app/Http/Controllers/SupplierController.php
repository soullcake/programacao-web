<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $lista = [
            0 => ['nome' => 'Pedro',
            'posicao' => 'Design',
            'mdt' => 'R'],

            1 => ['nome' => 'Ana',
            'posicao' => 'Dev',
            'mdt' => 'M'],

            2 => ['nome' => 'Join',
            'posicao' => 'Analista de Dados',
            'mdt' => '']
        ];

        return view('app.supplier.index', compact('lista'));
    }
}
