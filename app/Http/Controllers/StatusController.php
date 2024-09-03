<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::all();
        return view('statuses.index',['statuses'=>$statuses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        Status::create (['name' => $name]);
        return redirect(route('statuses.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $status = Status::find($id);
        if (empty($status)) {
            return redirect(route('statuses.index'));
        }
        return view('statuses.show')->with('status', $status);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $status = Status::find($id);
        if (empty($status)) {
            return redirect(route('statuses.index'));
        }
        return view('statuses.edit')->with('status', $status);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $status = Status::find($id);
        if (empty($status)) {
            return redirect(route('statuses.index'));
        }
        $status->name = $request['name'];
        $status->save();
        return redirect(route('statuses.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $status = Status::find($id);
        if (empty($status)) {
            return redirect(route('statuses.index'));
        }
        $status->delete();
        return redirect(route('statuses.index'));
    }
}
