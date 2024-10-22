<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $task = new Task();
        $task->task_name = $request->task_name;
        $task->task_description = $request->task_description;
        $task->task_is_done = $request->task_is_done;
        $task->task_observation = $request->task_observation;
        $task->save();
        return $task;
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task) //Model Binding
    {
        return $task->load('category');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->task_name = $request->task_name ?? $task->task_name;
        $task->task_description = $request->task_description ?? $task->task_description;
        $task->task_is_done = $request->task_is_done ?? $task->task_is_done;
        $task->task_observation = $request->task_observation ?? $task->task_observation;
        $task->save();
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            'message' => 'Task deleted',
            'task' => $task
        ], 200);
    }
}
