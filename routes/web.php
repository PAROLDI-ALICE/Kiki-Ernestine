<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CharStoreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//USER => INSCRIPTION + LOGIN
Route::resource(
    '/',
    UserController::class
);


//CREATION PERSONNAGE
Route::resource(
    '/character',
    CharacterController::class
);

//ATTRIBUTS
Route::resource(
    '/attribute',
    AttributeController::class
);

//GROUP
Route::resource(
    '/group',
    GroupController::class
);

//CATALOGUE
Route::resource(
    '/charstore',
    CharStoreController::class
);
