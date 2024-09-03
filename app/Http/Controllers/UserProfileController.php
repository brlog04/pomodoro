<?php

namespace App\Http\Controllers;

use App\Models\UserProfiles;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userProfiles = UserProfiles::all();
        return view('user_profiles.index',['userProfiles'=>$userProfiles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        UserProfiles::create([
            'facebook' => $request['facebook'],
            'twitter' => $request['twitter'],
            'googleplus' => $request['googleplus'],
            'linkedin' => $request['linkedin'],
            'about' => $request['about'],
            'website' => $request['website'],
            'phone' => $request['phone']
        ]);
        return redirect(route('userProfiles.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userProfiles = UserProfiles::find($id);
        if(empty($userProfiles)){
            return redirect(route('userProfiles.index'));
        }
        return view ('user_profiles.show',['userProfile'=>$userProfiles]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userProfiles = UserProfiles::find($id);
        return view('user_profiles.edit',['userProfiles'=>$userProfiles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userProfiles = UserProfiles::find($id);
        $userProfiles->facebook = $request['facebook'];
        $userProfiles->twitter = $request['twitter'];
        $userProfiles->googleplus = $request['googleplus'];
        $userProfiles->linkedin  = $request['linkedin'];
        $userProfiles->about  = $request['about'];
        $userProfiles->website  = $request['website'];
        $userProfiles->phone  = $request['phone'];
        $userProfiles->save();
        return redirect(route('userProfiles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userProfiles = UserProfiles::find($id);
        $userProfiles->delete();
        return redirect(route('userProfiles.index'));
    }
}
