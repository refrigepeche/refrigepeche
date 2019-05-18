<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class REFUSES extends Model
{
    protected $table = 'REFUSES';

    protected $fillable = [ 
        'ref',
        'qte',
        'unite',
        'imputation',
        'dateDemande',
        'dateRefus'
    ];
}
