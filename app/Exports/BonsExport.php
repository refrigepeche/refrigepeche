<?php

namespace App\Exports;

use App\Entity\BONS;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BonsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BONS::select('client', 'ref', 'qte', 'unite', 'imputation', 'type', 'date')->get();
    }

    public function headings(): array
    {
        return [
            'client',
            'ref',
            'qte',
            'unite',
            'imputation',
            'type',
            'date'
        ];
    }
}

