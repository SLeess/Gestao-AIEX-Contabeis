<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Aiex_System\Semester;

class SemesterMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Busque todos os semestres do banco de dados
        $semesters = Semester::orderBy('identificador', 'DESC')->get();

        // Compartilhe a variável com todas as views
        view()->share('semesters', $semesters);

        return $next($request);
    }
}
