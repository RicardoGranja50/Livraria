<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    //
    public function index(){

		//$autoes = Autor::all()->sortbydesc('ida');
		$autores= Autor::paginate(4);

		return view ('autores.index', [
			'autores'=>$autores
		]);
	}
}
