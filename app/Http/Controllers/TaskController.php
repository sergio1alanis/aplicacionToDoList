<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera la colección de todos los tasks y la agrega al arreglo $task
        $task['tasks'] = Task::all();

        return view('task.index', $task);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // variable $task recepciona todos los datos por request
        $task= request()->all();

        // crear un modelo a partir de la informacion recibida
        Task::create($task);

        // Redireccionar a la raiz
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $task= Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }
}
