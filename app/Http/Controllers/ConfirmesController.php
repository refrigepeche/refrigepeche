<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ConfirmesExport;


class ConfirmesController extends Controller
{
    public function exportConfirmes() 
    {

        return Excel::download(new ConfirmesExport, 'confirmes.xlsx');
    }
}
