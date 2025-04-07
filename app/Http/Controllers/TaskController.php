<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() 
    {

        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'task is deleted']);
    }

    public function update(TaskRequest $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($task->validated());

        return response()->json($task);
    }

    public function store(TaskRequest $request)
    {
        $newTask = Task::create($request->validated());

        return response()->json($newTask);

    }
}
