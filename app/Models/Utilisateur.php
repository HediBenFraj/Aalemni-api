<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Utilisateur extends Model
{

    protected $fillable = [
        'email',
        'bio',
        'password',
        'firstName',
        'lastName',
        'adress',
        'role',
        'age',
        'rating',
    ];

    public function etudiant_inscription(){
        return $this->hasMany('App\Models\Inscription','IdEtudiant','id');
    }

    public function etudiant_avis(){
        return $this->hasMany('App\Models\Avis','idEtudiant','id');
    }

    public function enseignant_avis(){
        return $this->hasMany('App\Models\Avis','idEnseignant','id');
    }

     public function enseignant_publication(){
         return $this->hasMany('App\Models\Publication','idEnseignant','id');
     }

}
