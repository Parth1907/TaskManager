<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', ['tasks' => Task::all()]);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        return redirect('/tasks');
    }
    public function edit($taskId)
    {
        $task = Task::find($taskId);
        return view('tasks.edit', ['task' => $task]);
    }
    public function update(Request $request, $taskId)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $task = Task::find($taskId);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        return redirect('/tasks');
    }
    public function destroy(Request $request)
    {
        Task::destroy($request->taskId);
        return redirect('/tasks');
    }
}
