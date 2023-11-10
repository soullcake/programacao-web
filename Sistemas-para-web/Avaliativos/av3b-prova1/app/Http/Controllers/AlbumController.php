<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index(string $name) {
        return view('dashboard', ['name' => $name]);
    }


    public function store(Request $request) {
    
        $album = $request->input('album');
        $artist = $request->input('artist');
        $name = $request->input('name');

        return redirect()->route('albumPage', [
            'name' => $name,
            'album' => $album,
            'artist' => $artist
        ]);

    }

    public function show(string $name, string $album, string $artist) {
        return view('album.show', [
            'name' => $name,
            'album' => $album,
            'artist' => $artist
        ]);
    }
}
