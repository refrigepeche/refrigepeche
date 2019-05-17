<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class PanierController extends Controller
{
    public function index(){
        return view('panier');
    }
    public function send(Request $req){
        $products= DB::table('panier_bon')->get();
        $ref=Input::get('checker');
        $select=Input::get('selection');
        $imputation=Input::get('imputation');
        $selection=array();
        if($select=='Bon_de_sortie_simple'){
            foreach($products as $product){
                $reference= $product->ref;
                if(isset($ref)){
                    for($i=0;$i<=count($ref);$i++){
                        if(isset($ref[$reference])){
                            if($ref[$reference]=="on"){
                                DB::table('BONS_p')->insert(["client"=>"","ref" => $product->ref,"qte" => $product-> qte, "unite" => $product -> unite, "imputation" => $imputation, "date" => $product -> date]);
                                DB::table('panier_bon')->delete($product->id);
                                break;
                            }
                        }
        
                    }
                }
                else{
                    DB::table('panier_bon')->delete($product->id);
                    break;
                }   
            }
        }
        if($select=='Fiche_de_travail'){
            foreach($products as $product){
                $reference= $product->ref;
                if(isset($ref)){
                    for($i=0;$i<=count($ref);$i++){
                        if(isset($ref[$reference])){
                            if($ref[$reference]=="on"){
                                DB::table('fiche_travail_pr')->insert(["client"=>"","ref" => $product->ref,"qte" => $product-> qte, "unite" => $product -> unite, "imputation" => $product -> imputation, "date" => $product -> date]);
                                DB::table('panier_bon')->delete($product->id);
                                break;
                            }
                        }
        
                    }
                }
                else{
                    //DB::table('REFUSES')->insert(["ref" => $product->ref,"qte" => $product-> qte, "unite" => $product -> unite, "imputation" => $product -> imputation, "dateDemande" => $product -> date]);
                    DB::table('panier_bon')->delete($product->id);
                    break;
                }   
            }   
        }
        if($select=='Demande_achat'){
            foreach($products as $product){
                $reference= $product->ref;
                if(isset($ref)){
                    for($i=0;$i<=count($ref);$i++){
                        if(isset($ref[$reference])){
                            if($ref[$reference]=="on"){
                                //DB::table('fiche_travail_pr')->insert(["client"=>"","ref" => $product->ref,"qte" => $product-> qte, "unite" => $product -> unite, "imputation" => $product -> imputation, "date" => $product -> date]);
                                $variable = $product->ref;
                                array_push($selection,$variable);
                                DB::table('panier_bon')->delete($product->id);
                                break;
                            }
                        }
        
                    }
                }
                else{
                    //DB::table('REFUSES')->insert(["ref" => $product->ref,"qte" => $product-> qte, "unite" => $product -> unite, "imputation" => $product -> imputation, "dateDemande" => $product -> date]);
                    DB::table('panier_bon')->delete($product->id);
                    break;
                }   
            } 
            return view('/ministock')->with('products',$selection);
        }
        
    echo "<b>Votre Bon de sortie a été envoyé</b><br />";
    echo "<a href='/panier'><button class='btn btn-primary'>Revenir à la page Panier</button></a>"; 
    }
}
