
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\ExercicioController; 


Route::get('/', [SiteController::class, 'home']);

Route::get('/login', [UsuarioController::class, 'loginView']);



Route::get('/exselecionado', [UsuarioController::class, 'exselecionadoView']);

Route::get('/meussalvos', [UsuarioController::class, 'meussalvosView']);


Route::get('/minhaconta', [UsuarioController::class, 'minhacontaView']);


Route::get('/pratica', [UsuarioController::class, 'praticaView']);

Route::get('/treinos', [TreinoController::class, 'listagemView']);


// As views ficam na pasta resourcer/views
// Todas as views vão ter a extenção .blade.php
