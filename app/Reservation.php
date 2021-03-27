<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'nom', 'prenom','genre','date_de_debut', 'date_de_fin'
    ];
}
