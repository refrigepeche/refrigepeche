<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

use App\Exports\BonsExport;

class BonController extends Controller
{
    public function index(){
        abort(404);
    }

    public function send(){
        $reference = $_POST["reference"];
        $client = $_POST["client"];
        $quantite = $_POST["quantite"];
        /*if($_POST["quantite"]> $qte){
            dd($qte);
        }*/
        $imputation ="";
        $unite = $_POST["unite"];
        $data = [$reference,$client,$quantite,$imputation,$unite ];
        if ((isset($reference)) && (isset($quantite)) && (isset($imputation)) && isset($unite) && isset($client)){
            try {
                DB::table('panier_bon')->insert(["ref" => $reference,"client" => $client, "qte" => $quantite, "unite" => $unite, "imputation" => $imputation]);
                return Redirect()->back();
            } catch (\Throwable $th) {
                echo 'tsy nety';
            }
        }else{
            abort(400,'Erreur dans le formulaire');
        }
    }

    public function exportBons(){
        return Excel::download(new BonsExport, 'bons.xlsx');
    }
}