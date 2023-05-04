<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function listagemView()
	{
        
		return view("treinos");
	}
}
