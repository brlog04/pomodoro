<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::all();
        return view('clients.index',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $note = $request->input('note');
        $logo = $request->input('logo');
        Clients::create (['name' => $name, 'description' => $description, 'note'=>$note, 'logo'=>$logo]);
        return redirect(route('clients.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clients = Clients::find($id);
        if(empty($clients)){
            return redirect(route('clients.index'));
        }
        return view('clients.show')->with('clients',$clients);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clients = Clients::find($id);
        if (empty($clients)) {
            return redirect(route('clients.index'));
        }
        return view('clients.edit')->with('clients', $clients);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clients = Clients::find($id);
        if (empty($clients)){
            return redirect(route('clients.index'));
        }
        $clients->name = $request['name'];
        $clients->description = $request['description'];
        $clients->logo = $request['logo'];
        $clients->note = $request['note'];
        $clients->save();
        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients = Clients::find($id);
        if (empty($clients)) {
            return redirect(route('clients.index'));
        }
        $clients->delete();
        return redirect(route('clients.index'));
    }
}
