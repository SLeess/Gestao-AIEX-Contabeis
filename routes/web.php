<?php

use App\Http\Controllers\Aiex_System\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/alunos', AlunoController::class);

// Route::put('/aluno/{id}', [AlunoController::class, 'update'])->name('aluno.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
