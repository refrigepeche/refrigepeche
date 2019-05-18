<?php

namespace App\Exports;

use App\Entity\Imputation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ImputationExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Imputation::select('imputation')->get();
    }

    public function headings(): array
    {
        return [
            'imputation'
        ];
    }
}
