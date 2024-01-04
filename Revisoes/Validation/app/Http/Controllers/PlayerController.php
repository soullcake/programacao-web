<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePlayerRequest;
use App\Models\Player;
use Illuminate\Http\Request;


class PlayerController extends Controller
{
    public function index() {
        $players = Player::all();

        return view('player.index', [
            'players' => $players
        ]);
    }

    public function create() {
        return view('player.create');
    }

    public function store(Request $request) {

        $player = new Player;
        $player->nome = $request->nome;
        $player->numero = $request->numero;
        $player->save();

        return redirect('/player');
    }

    public function edit($id) {
        $player = Player::find($id);
        return view('player.edit', [
            'player' => $player
        ]);
    }

    public function update(Request $request, $id) {
        $player = Player::find($id);

        $player->nome = $request->nome;
        $player->numero = $request->numero;
        $player->save();

        return redirect('/player');
    }
}
