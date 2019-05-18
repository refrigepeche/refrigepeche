<?php

namespace App\Http\Controllers;

use App\Exports\BaseExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function exportBase() 
    {

        return Excel::download(new BaseExport, 'base.xlsx');
    }
}
