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
    public function verifyLogin(Request $request)
    {
        //Captation des infos USER //GET
        $data = $request->validate([
            'firstname' => ['required', 'firstname'],
            'lastname' => ['required', 'lastname'],
            'pseudo' => ['required', 'pseudo'],
            'email' => ['required', 'email'],
            'password' => ['required', 'pasword']
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
        }
        //Redirect => Profil joueur (to be created)
        return redirect()->route('userProfil');

        return back()->withErrors(['email' => 'Veuillez vérifier vos coordonnées.']);
    }

    /**
     * PROFIL LOGIN sous condition d'authentification
     */
    public function profileConnect($email, $password, $user)
    {
        //Le User est bein connecté pour éccéder à son profil
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
            // Authentication was successful...
        }

        $user = Auth::user();
        //On retourne la vue blade profil du user avec les infos récupérer via $user directement dans la redirection
        return view('profile')->with(['user' => $user]);
    }



    /**
     * LOGOUT
     */
    public function goLogout(Request $request)
    {
        //
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
