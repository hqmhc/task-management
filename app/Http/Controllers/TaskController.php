<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //create a new task
    public function create()
    {
        return view('tasks.create');
    }

    //save the task
    public function store(Request $request)
    {
        $task = new Task;

        $task->task = $request->task;
        $task->status = $request->has('status'); // this will be true if the checkbox is checked, and false otherwise
        $task->amount = $request->amount;

        $task->save();

        return redirect()->route('tasks.index');
    }

    //show all tasks
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }
}
