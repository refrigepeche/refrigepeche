<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class CONFIRMES extends Model
{
    protected $table = 'CONFIRMES';

    protected $fillable = [ 
        'ref',
        'qte',
        'unite',
        'imputation',
        'dateDemande',
        'dateConfirmation'
    ];
}
