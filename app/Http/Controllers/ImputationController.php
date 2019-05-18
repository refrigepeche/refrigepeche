<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ImputationExport;

class ImputationController extends Controller
{
    public function exportImputation() 
    {

        return Excel::download(new ImputationExport, 'imputation.xlsx');
    }
}
