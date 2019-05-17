<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class MinistockController extends Controller
{
    public function index(){
        return view('panier');
    }
    public function send(Request $req){
        $refs=Input::get('ref');
        $fournisseur=Input::get('fournisseur');
        $nbr=Input::get('nbr');
        $date=Input::get('date');
        $imputation=Input::get('imputation');
        $numero=Input::get('numero');
        foreach($refs as $ref){
            DB::table('demande_achat')->insert(["client"=>"","ref" => $ref,"nbr" => $nbr, "date" => $date, "imputation" => $imputation, "fournisseur" => $fournisseur, "numero" => $numero]);
        }
    }
}
