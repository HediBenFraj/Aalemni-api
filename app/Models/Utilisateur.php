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

}
