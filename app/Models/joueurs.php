<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joueurs extends Model
{
    use HasFactory;

    private $id;
    private $nom;
    private $prenom;
    private $pseudo;
    private $email;
    private $mdp;
}
