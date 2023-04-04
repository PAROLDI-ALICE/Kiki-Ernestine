<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Metadata\Api\Groups;
use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('groups.group');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $validatedData = $request->validate(
            [
                'nom_groupe' => 'required|string',
                'description_groupe' => 'required|string',
                'nbre_places' => 'required|integer',
            ]
        );
        //Create and store into the DB
        $group = Group::create([
            'nom_groupe' => $validatedData['nom_groupe'],
            'description_groupe' => $validatedData['description_groupe'],
            'nbre_places' => $validatedData['nbre_places'],
        ]);
        return view('groups.group');
    }



    public function show(string $id)
    {
        $group = Group::find($id);
        return view('groups.show', ['group' => $group]);
    }




    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
