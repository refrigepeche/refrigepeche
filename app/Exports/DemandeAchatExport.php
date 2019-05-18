<?php

namespace App\Exports;

use App\Entity\Demande_achat;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DemandeAchatExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Demande_achat::select('client', 'ref', 'nbr', 'date', 'imputation', 'fournisseur', 'numero')->get();
    }

    public function headings(): array
    {
        return [
            'client',
            'ref',
            'nbr',
            'date',
            'imputation',
            'fournisseur',
            'numero'
        ];
    }
}
