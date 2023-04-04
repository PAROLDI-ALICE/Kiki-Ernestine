<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Arr;
use App\Models\Attributes;

class AttributesController extends Controller
{
    /**
     * Generate random - GENERER
     */

    public function getRandom()
    {
        //
        return view('character.index');
    }
    /**
     * Generate random -VALIDER => STORE
     */
    public function storeAttributes(Request $request)
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
        $attributs = Attributes::create([
            'nom_char' => $validatedData['prenom'],
            'description' => $validatedData['description'],
            'specialty' => $validatedData['specialty'],
            'magie' => $validatedData['magie'],


        ]);
        $attributs->save();
        return view('characters.personnage');
    }

    /**
     * Trying different random methods.... :-/
     */
    // public function getRandomLow()
    // {
    //     //Déterminer le tableau des nombres avec la fonction interne collecte()
    //     $array1 = collect()->range(0, 14);
    //     $array1->all();
    //     $randomLow = Arr::random($array1, 1);
    //     return $randomLow;
    //     // dd($array);
    // }

    // public function getRandomHigh()
    // {
    //     //Déterminer le tableau des nombres avec la fonction interne collecte()
    //     $array2 = collect()->range(20, 50);
    //     $array2->all();
    //     $randomHigh = Arr::random($array2, 1);
    //     return $randomHigh;
    //     // dd($array);
    // }
}
