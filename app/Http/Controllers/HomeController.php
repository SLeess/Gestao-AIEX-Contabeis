<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Aiex_System\Admin\{AlunoController};
use App\Http\Controllers\Aiex_System\Admin\SemesterController;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Pages.home');
    }

    public function students_register(){
        $alunos = AlunoController::indexStatic();
     // $semesters = SemesterController::index();
        return view('Pages.alunos',
            compact('alunos'));
    }
}
