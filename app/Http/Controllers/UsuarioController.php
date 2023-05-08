<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function home()
	{
		return view("home");
	}

    public function minhacontaView()
	{
        
		return view("minhaconta");
	}
}
