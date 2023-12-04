<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use App\Models\MusculoAlvo;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
	public function exselecionadoView(int $idExercicio)
	{
		$exercicio = Exercicio::find($idExercicio);

		return view("exselecionado", [
			'exercicio' => $exercicio,
		]);
	}

	public function exerciciosView(Request $request)
	{
		$musculoAlvo = $request->input("musculo_alvo");
		$exercicios = Exercicio::all();
		
		if($musculoAlvo) {
			$ma = MusculoAlvo::where('nome', $musculoAlvo)->first();
			if($ma) $exercicios = $ma->exercicios();
		}

		return view("exercicios", [
			"exercicios" => $exercicios,
		]);
	}
}
