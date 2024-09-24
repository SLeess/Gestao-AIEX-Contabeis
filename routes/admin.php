<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aiex_System\Admin\AlunoController;

// Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/teste', function () {
    return 'Admin Dashboard';
})->name('admin.dashboard');
// });


Route::resource('/alunos', AlunoController::class);
// middleware(['auth:sanctum', 'verified'])->
