<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\UserController;


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
    public function goLogin(Request $request)
    {
        //Captation des infos USER //GET
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
        }

        //Check dans la DB
        // User::all();
        // $user = User::where('pseudo', $validatedData['pseudo'])->first();

        //Redirect => Profil joueur
        return view('users.connected');

        return back()->withErrors(['email' => 'Veuillez vérifier vos coordonnées.']);
    }

    /**
     * PROFIL LOGIN sous condition d'authentification
     */
    public function profileConnect($email, $password)
    {
        //Le User est bien connecté pour accéder à son profil
        if (Auth::attempt(['email' => $email, 'mdp' => $password, 'active' => 1])) {
        }

        $user = Auth::user();
        //Redirect => Profil joueur avec le pseudo - Start Game
        return view('users.connected')->with(['user' => $user->pseudo]);
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
        return redirect()->route('index');
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
