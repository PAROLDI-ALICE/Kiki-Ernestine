<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ConnectedController extends Controller
{
    //
    public function index()
    {
        return view('users.connected');
    }
}
