<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function store(Request $request, string $name) {
        $album = $request->input('title');
        $artist = $request->input('artist');

        return redirect(url('/dashboard/show', [
            'name' => $name,
            'artist' => $artist,
            'album' => $album
        ]));
    }

    public function show(string $name, string $artist, string $album) {
        return view('album.show', [
            'name' => $name,
            'artist' => $artist,
            'album' => $album
        ]);
    }
}
