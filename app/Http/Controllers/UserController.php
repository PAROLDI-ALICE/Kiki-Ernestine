<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Page d'accueil
     */
    public function index()
    {
        return view('rpg.index');
    }

    /**
     * Formulaire inscription joueur
     */
    public function create()
    {
        //Formulaire de création d'un joueur
        return view('users.create');
    }

    /**
     * Storage des valeurs des inputs dans la DB
     */
    public function store(Request $request) //"{{ route('store') }}" du create.blade
    {
        //Validation de la requête
        $validatedData = $request->validate([
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'pseudo' => 'required|string|unique:users,pseudo',
            'email' => 'required',
            //REGEX pour le password (minimum 8 caractères et comportant une lettre, un chiffre et un symbole)
            'mdp' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
        ]);

        //Création du USER & storage DB 
        $user = User::create(
            [
                'prenom' => $validatedData['prenom'],
                'nom' => $validatedData['nom'],
                'pseudo' => $validatedData['pseudo'],
                'email' => $validatedData['email'],
                'mdp' => bcrypt($validatedData['mdp'])
            ]
        );

        $user->save();
        return view('users.profile', ['user' => $user]);
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $user)
    // {

    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
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
