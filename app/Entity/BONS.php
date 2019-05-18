<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class BONS extends Model
{
    protected $table = 'BONS';

    protected $fillable = [ 
        'client',
        'ref',
        'qte',
        'unite',
        'imputation',
        'type',
        'date'
    ];
}