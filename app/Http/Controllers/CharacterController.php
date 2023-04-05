<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use Ramsey\Uuid\Type\Integer;

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
                'magie' => 'required|string',
                'force' => 'required|string',
                'agilite' => 'required|string',
                'intelligence' => 'required|string',
                'points_de_vie' => 'required|string',
            ]
        );
        //Create and store into the DB
        $character = Character::create([
            'nom_char' => $validatedData['nom_char'],
            'description' => $validatedData['description'],
            'specialty' => $validatedData['specialty'],
            'magie' => $validatedData['magie'],
            'force' => $validatedData['force'],
            'agilite' => $validatedData['agilite'],
            'intelligence' => $validatedData['intelligence'],
            'points_de_vie' => $validatedData['points_de_vie'],
        ]);
        $character->save();
        //Retour à la vue post Login - 'Atelier' où FOREACH des $character
        return view('users.atelier')->with(['character' => $character]);
        // return redirect()->route('show.atelier', ['character' => $character->id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve all characters from the database
        $characters = Character::all($id);
        // Pass the characters to the view
        return view('users.atelier')->with(['characters' => $characters->id]);
    }


    public function destroy($id)
    {
        // Retrieve the character with the given ID
        $characters = Character::find($id);

        // Delete the character
        $characters->delete();

        // Redirect back to the index page
        return redirect()->route('index');
    }
}
