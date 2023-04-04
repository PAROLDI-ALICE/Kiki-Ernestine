<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('characters.personnage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $validatedData = $request->validate(
            [
                'nom_char' => 'required|string',
                'description' => 'required|string',
                'specialty' => 'required|string',
            ]
        );
        //Create and store into the DB
        $character = Character::create([
            'nom_char' => $validatedData['prenom'],
            'description' => $validatedData['description'],
            'specialty' => $validatedData['specialty'],
        ]);
        $character->save();
        return view('characters.personnage');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    //     return view('characters.edit');
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
