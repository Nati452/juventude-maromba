<?php

namespace App\Http\Controllers;

use App\Models\MusculoAlvo;
use Illuminate\Http\Request;
use App\Models\Treino;

class TreinoController extends Controller
{
	public function listagemView()
	{
		// Pega todos os registros da tabela treinos
		$treinos = Treino::all();
		
		return view("treinos", [
			'treinos' => $treinos // Envia os registros para a blade
		]);
	}
	public function treinoView(){
		return view("treino");


	}
}
