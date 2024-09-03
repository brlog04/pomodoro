<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Projects;
use App\Models\Status;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::with('status','client','createdBy')->get();
        //dd($projects);
        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Clients::all();
        $statuses = Status::all();
        return view('projects.create',['clients'=>$clients,'statuses'=>$statuses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $note = $request->input('note');
        $client_id = $request->input('client_id');
        $status_id = $request->input('status_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        Projects::create([
            'name' => $name, 'description' => $description, 'note' => $note, 'client_id' => $client_id,
            'status_id' => $status_id, 'start_date' => $start_date, 'end_date' => $end_date, 'created_by'=>1
        ]);
        return redirect(route('projects.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projects = Projects::find($id);
        if(empty($projects)){
            return redirect(route('projects.index'));
        }
        return view('projects.show',['projects'=>$projects]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projects = Projects::with('status','client')->find($id);
        if (empty($projects)){
            return redirect(route('projects.index'));
        }
        $clients = Clients::all();
        $statuses = Status::all();
        return view('projects.edit',['projects'=>$projects,'clients'=>$clients,'statuses'=>$statuses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $projects = Projects::find($id);
        $projects->name = $request['name'];
        $projects->description = $request['description'];
        $projects->note = $request['note'];
        $projects->client_id = $request['client_id'];
        $projects->status_id = $request['status_id'];
        $projects->start_date = $request['start_date'];
        $projects->end_date = $request['end_date'];
        $projects->save();
        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projects = Projects::find($id);
        if(empty($projects)){
            return redirect(route('projects.index'));
        }
        $projects->delete();
        return redirect(route('projects.index'));
    }
}
