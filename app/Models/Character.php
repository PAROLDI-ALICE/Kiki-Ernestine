<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $fillable = [
        'nom_char',
        'description',
        'specialty',
        'magie',
        'force',
        'agilite',
        'intelligence',
        'points_de_vie',
    ];
}
