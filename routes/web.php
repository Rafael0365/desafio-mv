<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipanteController;

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


Route::get('/', [ParticipanteController::class,'show'])->name('participante.lista');

Route::get('/cadastro', [ParticipanteController::class,'index'])->name('participante.formulario');

Route::get('/cadastro/{id}', [ParticipanteController::class,'edit'])->name('participante.formulario.edit');

Route::get('/cadastro/{id}', [ParticipanteController::class,'edit'])->name('participante.formulario.edit');

Route::post('/insere', [ParticipanteController::class,'create'])->name('insere');

Route::post('/edicao/{id}', [ParticipanteController::class,'update'])->name('participante.edicao');

Route::post('/exclusao/{id}', [ParticipanteController::class,'delete'])->name('participante.exclusao');
