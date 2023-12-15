<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Auth;

class TaskController extends Controller
{
    
    //listar as tarefas de um usuário
    public function index () {

        //ORM - select * from tasks where user_id = id;
        $tarefas = Task::where('user_id', Auth::id())->get();

        return view('task.index', [
            'lista' => $tarefas,
        ]);
    }

    //acessar formulário para criar tarefa
    public function create () {
        return view ('task.create');
    }

    //receber formulário e salvar dados
    public function store (Request $request) {

        $request->validate ([
            'description' => 'required',
        ], [
            'description' => 'obrigatório',
        ]);

        $task = new Task;
        $task->description = $request->description;
        $task->user_id = Auth::user()->id;
        $task->save();

        return redirect('/tasks');
    }

}
