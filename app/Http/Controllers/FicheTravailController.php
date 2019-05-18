<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\FicheTravailExport;

class FicheTravailController extends Controller
{
    public function exportFicheDeTravail() 
    {

        return Excel::download(new FicheTravailExport, 'fiche_de_travail.xlsx');
    }
}
