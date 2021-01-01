<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sceance extends Model
{


    protected $fillable = [
        'idPublication',
        'titre',
        'heureDebut',
        'heureFin',
        'saturee',
        'capacite'
    ];
}
