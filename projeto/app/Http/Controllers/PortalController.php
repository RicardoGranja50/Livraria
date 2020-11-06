<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function processarForm(Request $r){

    	$nome=$r->nome;
        return view('livros.mostrar',[
        	'nome'=>$nome
        ]);
    }
}
