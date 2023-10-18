<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
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

    // public function show() {

    // }
}
