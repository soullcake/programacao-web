<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

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
    
    public function show($id) {
        $task = Task::find($id);

        return view('task.show', compact('task'));
    }

    public function edit() {

    }

    public function update(Request $request, Task $task)
    {
        $task->update([
            'description' => $request->input('description'),
        ]);

        return redirect('/tasks');
    }

    public function destroy($task)
    {
        $remTask = Task::find($task);
        $remTask->delete();

        return redirect('/tasks');
    }

}