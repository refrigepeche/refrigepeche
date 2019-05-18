<?php

namespace App\Exports;

use App\Entity\Fiche_travail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FicheTravailExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fiche_travail::select('imputation', 'numero', 'date_debut', 'date_fin', 'motif', 'service', 'intervenant', 'qte', 'designation', 'ref')->get();
    }

    public function headings(): array
    {
        return [
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
}
