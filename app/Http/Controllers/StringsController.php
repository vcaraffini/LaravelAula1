<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringsController extends Controller
{
    public function paraMaiusculo($original){
    	$modificada = strtoupper($original);
    	return view ("exibirMaiusculo",["original"=> $original, "modificada" =>  $modificada]);
    	    }
    //teste
}
