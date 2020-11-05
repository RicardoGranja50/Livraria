<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    //
	public function index(){

		//$livros = Livro::all()->sortbydesc('idl');
		$livros = Livro::paginate(4);

		return view ('livros.index', [
			'livros'=>$livros
		]);
	}

	public function show(Request $request){

		$idLivro = $request->id;

		//$livro = Livro::findOrFail($idLivro);
		//$livro = Livro::find($idLivro);

		//$livro ="inf";
		//$livro = Livro::where('titulo','like','%'.$idLivro.'%')->get();

		//$livro ="inf";
		//$livro = Livro::where('titulo','like','%'.$idLivro.'%')->orWhere('sinopse', 'like','%'.$livro.'%')->get();

		

		$livro = Livro::where('id_livro',$idLivro)->with(['genero', 'autor'])->first();

		return view('livros.show',[
			'livro'=>$livro
		]);
	}
}
