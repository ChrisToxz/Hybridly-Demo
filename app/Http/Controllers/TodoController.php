<?php

namespace App\Http\Controllers;

use App\Data\CreateTodoData;
use App\Data\TodoData;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::latest()->get();

        return hybridly('todo.index', [
            'todos' => TodoData::collection($todos)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return hybridly('todo.create')->base('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTodoData $data)
    {
        auth()->user()->todos()->create($data->toArray());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
