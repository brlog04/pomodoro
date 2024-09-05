<?php

namespace App\Http\Controllers;

use App\Models\Pomodoros;
use Illuminate\Http\Request;

class PomodoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showPomodoroTimer()
    {
        $pomodoro = Pomodoros::find(2);
        $countDownDate = $pomodoro->end;
        //dd($countDownDate);
        //$countDownDate = time() * 1000 + 10500;
        $timestamp = strtotime($countDownDate)*1000;
        return view('testpomodoro',['countDownDate'=>$timestamp]);
    }

    public function index(){
        $pomodoros = Pomodoros::with('user', 'project', 'status', 'tasks')->get(); //'status', , 'task'
        //dd($pomodoros);
        return view ('pomodoros.index',['pomodoros'=>$pomodoros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pomodoros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pomodoros = Pomodoros::create([
            'status_id'=>$request->input('status_id'),
            'task_id'=>$request->input('task_id'),
            'user_id'=>$request->input('user_id'),
            'project_id'=>$request->input('project_id'),
            'start'=>$request->input('start'),
            'end'=>$request->input('end'),
            'deleted_by'=>$request->input('deleted_by')]
        );
        return redirect(route('pomodoros.index'));  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pomodoro = Pomodoros::find($id);
        if (empty($pomodoro)){
            return redirect(route('pomodoros.index'));
        }
        return view('pomodoros.show',['pomodoro'=>$pomodoro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pomodoro = Pomodoros::find($id);
        if (empty($pomodoro)){
            return redirect(route('pomodoros.index'));
        }
        return view('pomodoros.edit',['pomodoro'=>$pomodoro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pomodoros = Pomodoros::find($id);
        $pomodoros->status_id = $request->input('status_id');
        $pomodoros->task_id = $request->input('task_id');
        $pomodoros->user_id = $request->input('user_id');
        $pomodoros->project_id = $request->input('project_id');
        $pomodoros->start = $request->input('start');
        $pomodoros->end = $request->input('end');
        $pomodoros->deleted_by = $request->input('deleted_by');
        $pomodoros->save();
        return redirect(route('pomodoros.index'));        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
