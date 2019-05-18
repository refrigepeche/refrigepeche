<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\UserExport;

class UserController extends Controller
{
    public function exportUser() 
    {

        return Excel::download(new UserExport, 'users.xlsx');
    }
}
