<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FormBonController extends Controller
{
    public function index(){
        return view('formulaire.bon_simple');
    }
    public function send(){
        echo "send";
    }
}