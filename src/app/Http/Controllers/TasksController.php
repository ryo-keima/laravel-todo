<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('updated_at', 'desc')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

    public function add()
    {
        return view('tasks.add');
    }

    public function store(Request $request){
        $result = Task::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('tasks.index');
    }
}
