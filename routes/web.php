<?php

use App\Http\Controllers\FilmsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pokemons',
[PokemonsController::class, 'index']);

Route::get('films',
[FilmsController::class, 'index']);