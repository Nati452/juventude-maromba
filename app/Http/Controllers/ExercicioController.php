<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    

	public function exselecionadoView(Request $request)
	{
		$idExercicio = $request->input('id');
		// Pega um único exercício da tabela (acha pelo id)
		$exercicio = Exercicio::find($idExercicio);

		return view("exselecionado", [
			'exercicio' => $exercicio, // Envia o exercicio para a blade
		]);
	}

	public function exerciciosView()
	{

		return view("exercicios", [
			
		]);
	}
}
