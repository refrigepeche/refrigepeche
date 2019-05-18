<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('name', 'email','service','familles','menu','type')->get();
    }

    public function headings(): array
    {
        return [
            'name', 'email','service','familles','menu','type'
        ];
    }
}
