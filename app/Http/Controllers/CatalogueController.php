<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CatalogueController extends Controller
{
    public function index(){
        abort(404);
    }

    public function view($groupe){
        return view('piece')->with(array('groupe' => $groupe));
    }

    public function interact($groupe, $reference){
        try {
            $image = DB::table('BASE')->where('REFERENCE_info_libre', $reference)->get();
            //$image = get($image[0]['PICT1']);
            $image = $image[0]->PICT1;
            if ($image == "0"){
                $image = 'NOIMAGE';
            }
        } catch (\Throwable $th) {
            //throw $th;
            $image = 'NOIMAGE';
        }
        $data = array(
            'groupe' => $groupe,
            'reference' => $reference,
            'image' => $image
        );
        return view('piece')->with($data);
    }

    public function interact2($groupe, $reference, $image){
        $data = array(
            'groupe' => $groupe,
            'reference' => $reference,
            'image' => $image
        );
        return view('piece')->with($data);
    }
    public function famille(){
        
        return view('famille');
    }
    public function familleproduct($i){
        $famille = DB::table('BASE')->select('CATALOG1')->where('FAMILLE', 'like', $i."%")->groupBy('CATALOG1')->get();
        return view('catalog')->with('famille', $famille);
    }
    public function famille2(){
        $famille = DB::table('BASE')->select('CATALOG1');
        return view('famille');
    }

    public function catalog1($i){
            $catalog1 = DB::table('BASE')->select('CATALOG2')->where('CATALOG1', $i)->groupBy('CATALOG2')->get();
        return view('catalog')->with('catalog1', $catalog1);
    }

    public function catalog2($i){
        $catalog2 = DB::table('BASE')->select('ECLATER_catalogue_4')->where('CATALOG2', $i)->groupBy('ECLATER_catalogue_4')->get();
        return view('catalog')->with('catalog2', $catalog2);
    }

}