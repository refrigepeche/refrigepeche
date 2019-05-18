<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\DemandeAchatExport;

class DemandeAchatController extends Controller
{
    public function exportDemandeAchat() 
    {

        return Excel::download(new DemandeAchatExport, 'demande_achats.xlsx');
    }
}
