<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;


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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'pseudo' => 'required|string|unique:users',
            'email' => 'required',
            //REGEX pour le password (minimum 8 caractères et comportant une lettre, un chiffre et un symbole)php
            'password' => 'required|min:8|regex:/^(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^&*-]).{6,}$/',
        ]);

        //Création du Joueur & Storage DB via Model
        $user = User::create(
            [
                'firstname' => $validatedData['firstname'],
                'lastname' => $validatedData['lastname'],
                'pseudo' => $validatedData['pseudo'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]
        );

        return redirect()->route('users.welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user)
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
