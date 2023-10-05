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
				'img' => '/img/banners/panturrilha.jpg',
			],

		
		(object) [
			'id' => 4,
			'img' => '/img/banners/coxas.jpg',
		],


	(object) [
		'id' => 4,
		'img' => '/img/banners/triceps.jpg',
	],

(object) [
	'id' => 4,
	'img' => '/img/banners/tropa2.jpg',
],


(object) [
	'id' => 4,
	'img' => '/img/banners/abdomem.jpg',
],

(object) [
	'id' => 4,
	'img' => '/img/banners/braco.jpg',
],

(object) [
	'id' => 4,
	'img' => '/img/banners/pernas.jpg',
],

(object) [
	'id' => 4,
	'img' => '/img/banners/supino.jpg',
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
