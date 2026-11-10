<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', [AlunoController::class, 'index']);
Route::get('/new', [AlunoController::class, 'create']);
Route::post('/alunos/save', [AlunoController::class, 'store']);
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy']);
Route::get('/alunos/{id}', [AlunoController::class, 'edit']);
Route::put('/alunos/{id}', [AlunoController::class, 'update']);