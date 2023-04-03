<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CharStoreController;
use App\Http\Controllers\LoginController;


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

/*
USER CONTROLLER => INSCRIPTION
*/

//INDEX - GET
Route::get(
    '/',
    [UserController::class, 'index']
)->name('index');

//CREATE - GET
Route::get(
    '/create',
    [UserController::class, 'create']
)->name('create');

//STORE -POST
Route::post(
    '/post',
    [UserController::class, 'store']
)->name('post.store');


/*
USER LOGIN => LOGIN
*/

// Login form de connection
Route::get(
    '/login',
    [LoginController::class, 'index']
)->name('login');

// Login POST datas
Route::post(
    '/login/sent',
    [LoginController::class, 'goLogin']
)->name('go.login');

// Login vers User Profile
Route::get(
    '/login/profile',
    [LoginController::class, 'profileConnect']
)->name('user.profile');



// LOGGED IN
// Route::resource(
//     '/welcome',
//     LoginController::class
// );

//CREATION PERSONNAGE
// Route::resource(
//     '/character',
//     CharacterController::class
// );

// //ATTRIBUTS
// Route::resource(
//     '/attribute',
//     AttributeController::class
// );

// //GROUP
// Route::resource(
//     '/group',
//     GroupController::class
// );

// //CATALOGUE
// Route::resource(
//     '/charstore',
//     CharStoreController::class
// );