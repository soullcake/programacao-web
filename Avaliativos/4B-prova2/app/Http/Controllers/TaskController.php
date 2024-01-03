<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TaskController extends Controller
{
    
    //listar as tarefas de um usuário
    public function index () {

        //ORM - select * from tasks where user_id = id;
        $tarefas = Task::where('user_id', Auth::id())->get();
        $user = Auth::user();

        // tarefas compartilhadas
        $sharedTasks = Task::whereHas('users', function ($query) use ($user) {
            $query->where('user_id', '=', $user->id);
        })->get();

        return view('task.index', [
            'lista' => $tarefas,
            'lista2' => $sharedTasks,
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

        return view('task.show', [
            'task' => $task,
        ]);
    }

    public function destroy($task)
    {
        $remTask = Task::find($task);
        $remTask->delete();

        return redirect('/tasks');
    }

    public function shareCreate() {
        return view('task.share');
    }

    public function ShareTask(Request $request){
        $task = Task::find($request->task_id);
        $userToShare = User::find($request->user_id);

        $user = Auth::user();
        $task->users()->attach($userToShare);

        return redirect('/tasks');
    }
}
