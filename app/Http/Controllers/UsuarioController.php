<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function minhacontaView()
	{
        
		return view("minhaconta");
	}

	public function loginView()
	{
        
		return view("login");
	}

	public function cadastroView()
	{
        
		return view("cadastro");
	}
}
