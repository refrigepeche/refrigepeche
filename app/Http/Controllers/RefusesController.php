<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\RefusesExport;

class RefusesController extends Controller
{
    public function exportRefuses() 
    {

        return Excel::download(new RefusesExport, 'refuses.xlsx');
    }
}
