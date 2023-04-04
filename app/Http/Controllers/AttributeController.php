<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getRandomMag()
    {
        //Déterminer le tableau des nombres avec la fonction interne collecte
        $array = collect()->range(0, 14);
        $array->all();
        return view('characters.personnage');
        // dd($array);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getRandomFor()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getRandomAgy()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function getRandomInt()
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
    public function getRandomPv()
    {
        //
    }
}
