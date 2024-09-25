<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aiex_System\Admin\AlunoController;
use App\Http\Controllers\Aiex_System\Admin\SemesterController;
use App\Http\Controllers\HomeController;

Route::get('/teste', function () {
    return 'Admin Dashboard';
})->name('admin.dashboard');

Route::group([],function () {
    Route::get('/teste', function () {
        return 'Admin Dashboard';
    })->name('admin.dashboard');

    Route::resource('alunos', AlunoController::class)
        ->names('alunos')
        ->parameters(['alunos' => 'student']);

    Route::get('/alunos', [HomeController::class, 'students_register'])
        ->name('students.register');

    Route::resource('semestres', SemesterController::class)
        ->names('semester')
        ->parameters(['semestres'=> 'identify']);
});


// Route::resource('alunos', AlunoController::class)
//     ->names('alunos')
//     ->parameters(["alunos" => "student"]);

/*Route::delete('/alunos/{student}', [AlunoController::class, 'destroy'])
    ->name('alunos.destroy')
    ->middleware('can: update-alunos');*/

