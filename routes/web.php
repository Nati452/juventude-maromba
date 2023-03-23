
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/login', [UsuarioController::class, 'loginView']);

Route::get('/home', [UsuarioController::class, 'homeView']);

Route::get('/exselecionado', [UsuarioController::class, 'exselecionadoView']);

Route::get('/meussalvos', [UsuarioController::class, 'meussalvosView']);


Route::get('/minhaconta', [UsuarioController::class, 'minhacontaView']);


Route::get('/pratica', [UsuarioController::class, 'praticaView']);


// As views ficam na pasta resourcer/views
// Todas as views vão ter a extenção .blade.php
