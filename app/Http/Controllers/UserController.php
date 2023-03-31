<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\joueurs;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rpg.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Formulaire de création d'un joueur
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $user)
    {
        //Validation de la requête
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'pseudo' => 'required|string|unique:users',
            'email' => 'required',
            //REGEX pour le password (minimum 8 caractères et comportant une lettre, un chiffre et un symbole)
            'password' => 'required|min:8|regex:/^(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^&*-]).{6,}$/',
        ]);

        //Création du Joueur
        $user = joueurs::create();
        //Storage DB via Model 'joueurs'
        $user = new joueurs(
            [
                'Prenom' => $request->input('firstname'),
                'Nom' => $request->input('lastname'),
                'Pseudo' => $request->input('pseudo'),
                'Email' => $request->input('email'),
                'Mdp' => bcrypt($request->input('password')),
            ]
        );
        //Fonction SAVE
        $user->save();
        //REdirect => Profil joueur
        return redirect('users.create');
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
