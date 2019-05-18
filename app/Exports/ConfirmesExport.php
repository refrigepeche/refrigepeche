<?php

namespace App\Exports;

use App\Entity\CONFIRMES;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ConfirmesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CONFIRMES::select('ref', 'qte', 'unite', 'imputation', 'dateDemande', 'dateConfirmation')->get();
    }

    public function headings(): array
    {
        return [
            'ref',
            'qte',
            'unite',
            'imputation',
            'dateDemande',
            'dateConfirmation'
        ];
    }
}
