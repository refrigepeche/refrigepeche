<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
class UserInsertionController extends Controller
{
    public function index(){
        return view('formulaire.insertion_user');
    }
    public function send(Request $req){
        $type_user=Input::get('type_user');
        $famille=Input::get('check_famille');
        $menu=Input::get('check_menu');
        $nom=Input::get('name');
        $email=Input::get('email');
        $service=Input::get('service');
        $password=Input::get('password');
        $password = Hash::make($password);
        $result_famille = implode(',',$famille);
        $result_menu = implode(',',$menu);
        echo $nom."<br />";
        echo $email."<br />";
        echo $service."<br />";
        echo $result_menu."<br />";
        echo $result_famille."<br />";
        echo $password."<br />";
        echo $type_user;
        User::create([
            'name' => $nom,
            'email' => $email,
            'password' => $password,
            'service' => $service,
            'familles' => $result_famille,
            'menu' => $result_menu,
            'type' => $type_user
        ]);
    }
   
}
