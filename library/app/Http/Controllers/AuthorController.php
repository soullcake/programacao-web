<?php

namespace App\Http\Controllers;
use App\Models\Author;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{

    public function index()
    {
        // retornando a view e so dados dos autores 
        return view('author.index', [
            'authors' => Author::all()
        ]);
    }

    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {
        // Author::create($request->all());

        Author::create([
            'name' => $request->name,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'birthdate' => $request->birthdate
        ]);

        return redirect('/author');
    }

    public function show(Author $author)
    {
        return view('author.show',[
            'author' => $author
        ]);
    }

    public function edit(Author $author)
    {   
        // pegando o registro correspondente ao id: 

        return view('author.edit', [
            'author' => $author
        ]);
    }

    public function update(Request $request, Author $author)
    {
        $author->update($request->all());

        return redirect('/author');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect('/author');
    }


}
