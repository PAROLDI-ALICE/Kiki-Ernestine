<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Import of  the Auth facade 
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * LOGIN 
     */

    //Form de connection d'un User inscrit
    public function index()
    {
        return view('users.connexForm');
    }

    //Process d'authentification
    public function create(Request $request)
    {
        //Captation des infos USER //GET
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'mdp' => ['required']
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
        }
        //Redirect => Profil joueur
        // return redirect('users.connected');

        return back()->withErrors(['email' => 'Veuillez vérifier vos coordonnées.']);
    }

    /**
     * PROFIL LOGIN sous condition d'authentification
     */
    public function profileConnect($email, $password, $user)
    {
        //Le User est bein connecté pour éccéder à son profil
        if (Auth::attempt(['email' => $email, 'mdp' => $password, 'active' => 1])) {
        }

        $user = Auth::user();
        //Redirect => Profil joueur avec le pseudo - Start Game
        return view('users.connected')->with(['user' => $user]);
    }

    /**
     * LOGOUT
     */
    public function goLogout(Request $request)
    {
        //Rappel Auth (fonction interne logout de Illuminate)
        Auth::logout();

        $request->session()->invalidate();

        //Redirection vers index
        return redirect('rpg.index');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
