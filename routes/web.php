<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\RencontreController;
use App\Http\Controllers\ChampionnatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/', JoueurController::class);

Route::resource('joueurs', JoueurController::class);

Route::resource('equipes', EquipeController::class);

Route::resource('rencontres', RencontreController::class);

Route::resource('championnats', ChampionnatController::class);

Route::resource('ajout', AjoutController::class);

require __DIR__.'/auth.php';
