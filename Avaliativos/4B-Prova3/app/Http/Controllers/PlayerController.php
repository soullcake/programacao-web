<?php

namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;
use Auth;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::all();
        return view('player.index', [
            'players' => $players,
        ]);
    }

    public function create() {
        return view('player.create');
    }

    public function store(Request $request) {
        $player = new Player;
        $player->user_id = Auth::user()->id;  
        $player->nome = $request->nome;
        $player->numero = $request->numero;
        $player->save();

        return redirect('/player');
    }

    public function destroy(Player $id) {
        $id->delete();
        return redirect('/player');
    }
}
