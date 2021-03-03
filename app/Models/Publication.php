<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    
    protected $fillable = [
        'idEnseignant',
        'titre',
        'description',
        'date',
        'matiere'
    ];


    public function publication_enseignant(){
        return $this->hasOne('App\Models\Utilisateur','id','idEnseignant');
    }
}
