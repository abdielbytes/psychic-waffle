<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Inertia\Inertia;

class TaskController extends Controller
{
    public function index()
    {

        
        $user = auth()->user();


        // $tasks = Task::where('user_id', $user->id)->get();
        $tasks = Task::all();

        return Inertia::render('Tasks', [
            'tasks' => $tasks,
        ]);


    }

    public function create ()
    {
        return Inertia::render('CreateTask');
    }

    public function store(Request $request)
    {

        $validator = $request->validate([
            'decription'=>'nullable'

        ]);

        Task::create([
            'description' => $validator['decription'],
        ]);

        return redirect()->route('tasks.index')->with('success', 'Created succesffully');
    }
}

