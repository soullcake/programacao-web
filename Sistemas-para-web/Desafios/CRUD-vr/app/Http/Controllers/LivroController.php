<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index() {
        return view('livro.index', [
            'livros' => Livro::all()    // enviando todos os registros de Livro
        ]);
    }

    public function create() {
        return view('livro.create');
    }

    public function store(Request $request) {
        // Salvando todos os campos que chegam pela Request:
        Livro::create($request->all());
        return redirect('/livro');
    }

    public function show(Livro $livro){
        return view('livro.show', [
            'livro' => $livro
        ]);
    }

    public function edit(Livro $livro) {
        return view('livro.edit', [
            'livro' => $livro
        ]);
    }
    
    public function update(Request $request, Livro $livro) {
        $livro->update($request->all());

        return redirect('/livro');
    }

    public function destroy(Livro $livro) {
        $livro->delete();

        return redirect('/livro');
    }

}
