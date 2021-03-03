<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sceance extends Model
{


    protected $fillable = [
        'idEnseignant',
        'titre',
        'jour',
        'heureDebut',
        'heureFin',
        'capacite'
    ];

    protected $casts = [
        'saturee' => 'boolean'
    ];


    public function sceance_inscription(){
        return $this->hasMany('App\Models\Inscription','idSceance','id');
    }
}
