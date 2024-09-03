<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Tasks::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $name = $request->input('name');
        $description = $request->input('description');
        $status_id = $request->input('status_id');
        $note = $request->input('note');
        $project_id = $request->input('project_id');
        $user_id = $request->input('user_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        Tasks::create([
            'name' => $name,
            'description' => $description,
            'note' => $note,
            'project_id' => $project_id,
            'user_id' => $user_id,
            'status_id' => $status_id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'created_by' => 1
        ]);
        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Tasks::find($id);
        if (empty($task)) {
            return redirect(route('tasks.index'));
        }
        return view('tasks.show',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tasks = Tasks::find($id);
        return view('tasks.edit',['tasks'=>$tasks]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tasks = Tasks::find($id);
        $tasks->name = $request->input('name');
        $tasks->description = $request->input('description');
        $tasks->status_id = $request->input('status_id');
        $tasks->note = $request->input('note');
        $tasks->project_id = $request->input('project_id');
        $tasks->user_id = $request->input('user_id');
        $tasks->start_date = $request->input('start_date');
        $tasks->end_date = $request->input('end_date');
        $tasks->save();
        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Tasks::find($id);
        if(empty($tasks)){
            return redirect(route('tasks.index'));
        }
        $tasks->delete();
        return redirect(route('tasks.index'));
    }
}
