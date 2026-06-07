<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // traer todos los registros
        $tasks = Task::all();
        //return response()->json($tasks);

        return Inertia::render('Tasks', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validacion para guardar un registro
        $validated = $request->validate([
            'task' => 'required|string|min:5'
        ]);

        $task = Task::create([
            'task' => $validated['task'],
            'completed' => false
        ]);

        //return response()->json($task, 201); // se usa para cuando se ha creado un nuevo recurso
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'completed' => 'required|boolean'
        ]);

        $task->completed = $validated['completed'];
        $task->save();

        //return response()->json($task, 200);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        //return response()->json(null, 204); // 204: No content -> para cuando la operacion fue exitosa pero no hay contenido para devolver

        return redirect()->back();
    }
}
