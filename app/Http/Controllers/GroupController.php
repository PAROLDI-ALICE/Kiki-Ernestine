<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('groups.groupe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $validatedData = $request->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string',
            ]
        );
        //Create and store into the DB
        $group = Group::create([
            'nom_groupe' => $validatedData['name'],
            'description_groupe' => $validatedData['description'],


        ]);
        $group->save();
        return view('groups.groupe');
    }













    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.groupe');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
