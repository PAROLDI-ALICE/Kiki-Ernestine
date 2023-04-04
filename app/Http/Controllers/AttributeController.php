<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Arr;

class AttributeController extends Controller
{
    /**
     * Random 
     */
    public function getRandomLow()
    {
        //Déterminer le tableau des nombres avec la fonction interne collecte()
        $array1 = collect()->range(0, 14);
        $array1->all();
        $randomLow = Arr::random($array1, 1);
        return $randomLow;
        // dd($array);
    }

    public function getRandomHigh()
    {
        //Déterminer le tableau des nombres avec la fonction interne collecte()
        $array2 = collect()->range(20, 50);
        $array2->all();
        $randomHigh = Arr::random($array2, 1);
        return $randomHigh;
        // dd($array);
    }
}
