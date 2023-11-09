<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treino;
use App\Models\User;

class TreinoController extends Controller
{
	public function listagemView()
	{
		$treinos = Treino::all();

		return view("treinos", [
			'treinos' => $treinos
		]);
	}

	public function treinoView(Request $request)
	{
		$idTreino = $request->input('id');
		$treino = Treino::find($idTreino);

		return view("treino", [
			'treino' => $treino
		]);
	}

	public function listagemUsuarios()
	{
		$users = User::all();

		return view("listagem-usuario", [
			"users" => $users
		]);
	}
}
