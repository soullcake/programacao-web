<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function testando(int $p1, int $p2) {

        // return view('site.teste', ['valor1' => $p1, 'valor2' => $p2]); //array associativo

        // return view('site.teste', compact('p1','p2'));  //compact()

        return view('site.teste')->with('valor1', $p1)->with('valor2', $p2);    //with()
    }
}
