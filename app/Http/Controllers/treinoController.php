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
		// $treinos = Treino::all();

		$treinos = [
			(object) [
				'id' => 1,
				'img' => '/img/banners/biceps.jpg',
			],
			(object) [
				'id' => 2,
				'img' => '/img/banners/bumbum.jpg',
			],
			(object) [
				'id' => 3,
				'img' => '/img/banners/costas.jpg',
			],
			(object) [
				'id' => 4,
				'img' => '/img/banners/costas.jpg',
			],
		];
		
		return view("treinos", [
			'treinos' => $treinos // Envia os registros para a blade
		]);
	}
	public function treinoView(){
		return view("treino");


	}
}
