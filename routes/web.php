<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\AttributesController;
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

// Login vers User Profile
Route::get(
    '/logout',
    [LoginController::class, 'goLogout']
)->name('user.logout');

/*
PERSONNAGES 
*/
// CREATION PERSONNAGE
Route::get(
    '/character',
    [CharacterController::class, 'index']
)->name('character.index');

//STORE -POST - post your character
Route::post(
    '/postcharacter',
    [CharacterController::class, 'store']
)->name('character.store');

//displaying characters
Route::get(
    '/showcharacters',
    [CharacterController::class, 'show']
)->name('show.atelier');

//EDIT
Route::get(
    '/editcharacters/{id}',
    [CharacterController::class, 'edit']
)->name('character.edit');

//DESTROY
Route::delete(
    '/destroycharacter/{id}',
    [CharacterController::class, 'destroy']
)->name('character.destroy');

/*
GROUP => inviting characters and players
*/
//GROUP
Route::get(
    '/group',
    [GroupController::class, 'index']
)->name('group.index');

// Route::get(
//     '/group/create',
//     [GroupController::class, 'create']
// )->name('group.create');

Route::post(
    '/group/store',
    [GroupController::class, 'store']
)->name('group.store');

// Route::get(
//     '/showcharacters',
//     [GroupController::class, 'show']
// )->name('show.atelier');

// //CATALOGUE
// Route::get(
//     '/group/view',
//     [GroupController::class, '']
// )->name('group.create');
