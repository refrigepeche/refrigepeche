<?php

namespace App\Exports;

use App\Entity\REFUSES;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RefusesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return REFUSES::select('ref', 'qte', 'unite', 'imputation', 'dateDemande', 'dateRefus')->get();
    }

    public function headings(): array
    {
        return [
            'ref',
            'qte',
            'unite',
            'imputation',
            'dateDemande',
            'dateRefus'
        ];
    }
}
