<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aiex_System\AlunoController;
use App\Http\Middleware\SemesterMiddleware;

Route::get('/', function (){
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
// Route::get('/test-semesters', function () {
//     // Simule a execução do middleware
//     $semesters = app(\App\Http\Middleware\SemesterMiddleware::class)->handle(request(), function () {
//         return response()->json(['message' => 'Middleware executado.']);
//     });

//     return $semesters;
//     // return 3;
// })->middleware(SemesterMiddleware::class);
