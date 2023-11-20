<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\GameController;

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

Route::get('/', [PublicController::class,'home'])->name('home');
// Route::get('/esterno',[PublicController::class,'index'])->name('index.esterno');
// Route::get('/interno',[PublicController::class,'index'])->name('index.interno');

// rotte per form
Route::get('/game/create',[GameController::class,'create'])->name('game.create');
Route::get('/game/store',[GameController::class,'store'])->name('game.store');
