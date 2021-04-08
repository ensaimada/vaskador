<?php

namespace App\Http\Controllers;

use App\Collaboration;
use App\CollaborationRoster;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CollaborationController extends Controller {
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $collaborations = Collaboration::all();

        return Inertia::render('Collaborations/Index',[
            'collaborations' => $collaborations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return Inertia::render('Collaborations/Create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $uuid = Uuid::generate();
        $collaboration_max_members = 5;

        $request->validate([
            'collaboration_title'=> 'required',
        ]);

        Collaboration::create([
            'collaboration_key' => $uuid,
            'collaboration_title' => $request->collaboration_title,
            'collaboration_desc' => $request->collaboration_desc,
            'collaboration_max_members' => $collaboration_max_members
        ]);

        ## Success Msg ##
        return redirect()->route('collaborations.index')->with('successMsg','Collaboration successfully created.');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaboration $collaboration) {
        return Inertia::render('Collaborations/Edit', [
            'collaboration' => $collaboration,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaboration $collaboration) {
        $request->validate([
            'collaboration_title' => 'required'.$collaboration->collaboration_key,
        ]);

        Collaboration::update([
            'collaboration_title' => $request->collaboration_title,
            'collaboration_desc' => $request->collaboration_desc
        ]);

        ## Success Msg ##
        return redirect()->route('collaborations.index')->with('successMsg','Collaboration successfully modified.');
   
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaboration $collaboration) {
        $user->delete();

        return redirect()->route('collaborations.index')->with('successMsg', 'Collaboration successfully deleted.');    
    }
}
