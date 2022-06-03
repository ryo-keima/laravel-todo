<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->orderBy('id', 'desc')->paginate(10);
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        if ($task->user_id === Auth::id()){
            return view('tasks.show', compact('task'));
        }
        abort(404);
    }

    public function add() 
    {
        return view('tasks.add');
    }

    public function store(TaskRequest $request)
    {
        $result = Task::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id()
        ]);
        return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        if ($task->user_id === Auth::id()){
            return view('tasks.edit', compact('task'));
        }
        abort(404);
    }

    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);
        $task->fill([
            'title' => $request->title,
            'content' => $request->content,
        ])->save();
        return redirect()->route('tasks.index');
    }

    public function delete($id)
    {
        Task::destroy($id);
        return redirect()->route('tasks.index');
    }
}
