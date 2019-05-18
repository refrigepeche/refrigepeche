<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Fiche_travail extends Model
{
    protected $table = 'Fiche_travail';

    protected $fillable = [ 
        'imputation',
        'numero',
        'date_debut',
        'date_fin',
        'motif',
        'service',
        'intervenant',
        'qte',
        'designation',
        'ref'
    ];
}
