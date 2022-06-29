<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmasController;
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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});

Route::get('/alunos', [App\Http\Controllers\AlunosController::class, 'index'])->middleware('auth');
Route::get('/alunos/new', [App\Http\Controllers\AlunosController::class, 'new'])->middleware('auth');
Route::post('/alunos/add', [App\Http\Controllers\AlunosController::class, 'add'])->middleware('auth');
Route::get('/alunos/{id}/edit', [App\Http\Controllers\AlunosController::class, 'edit'])->middleware('auth');
Route::post('/alunos/update/{id}', [App\Http\Controllers\AlunosController::class, 'update'])->middleware('auth');
Route::delete('/alunos/delete/{id}', [App\Http\Controllers\AlunosController::class, 'delete'])->middleware('auth');

Route::get('/turmas', [App\Http\Controllers\TurmasController::class, 'index'])->middleware('auth');
Route::get('/turmas/new', [App\Http\Controllers\TurmasController::class, 'new'])->middleware('auth');
Route::post('/turmas/add', [App\Http\Controllers\TurmasController::class, 'add'])->middleware('auth');
Route::get('/turmas/{id}/edit', [App\Http\Controllers\TurmasController::class, 'edit'])->middleware('auth');
Route::post('/turmas/update/{id}', [App\Http\Controllers\TurmasController::class, 'update'])->middleware('auth');
Route::delete('/turmas/delete/{id}', [App\Http\Controllers\TurmasController::class, 'delete'])->middleware('auth');
Route::get('/turmas/{id}/listar', [App\Http\Controllers\TurmasController::class, 'listar'])->middleware('auth');

Route::get('/professor', [App\Http\Controllers\ProfessorController::class, 'index'])->middleware('auth');
Route::get('/professor/new', [App\Http\Controllers\ProfessorController::class, 'new'])->middleware('auth');
Route::post('/professor/add', [App\Http\Controllers\ProfessorController::class, 'add'])->middleware('auth');
Route::get('/professor/{id}/edit', [App\Http\Controllers\ProfessorController::class, 'edit'])->middleware('auth');
Route::post('/professor/update/{id}', [App\Http\Controllers\ProfessorController::class, 'update'])->middleware('auth');
Route::delete('/professor/delete/{id}', [App\Http\Controllers\ProfessorController::class, 'delete'])->middleware('auth');
