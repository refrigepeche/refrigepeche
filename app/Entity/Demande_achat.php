<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Demande_achat extends Model
{
    protected $table = 'demande_achat';

    protected $fillable = [ 
        'client',
        'ref',
        'nbr',
        'date',
        'imputation',
        'fournisseur',
        'numero'
    ];
}
