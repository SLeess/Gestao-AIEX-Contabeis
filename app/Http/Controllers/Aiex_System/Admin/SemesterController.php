<?php

namespace App\Http\Controllers\Aiex_System\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aiex_System\Semester;
use App\Http\Requests\StoreUpdateSemesterFromRequest;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;

class SemesterController extends Controller
{
    public function __construct(Request $request){
        $this->verifyAdmin($request);
    }

    /**
     * A secure system to don't allow no admin users to access that controller
     */

    private function verifyAdmin(Request $request){
        if (!$request->routeIs('admin.*')) {
            return redirect()->back()->with('error','O usuário não possui permissão de administrador');
        }
    }

    public function index()
    {
        $semesters = Semester::orderBy('identificador', 'DESC')->get();
        return view('Pages.semesters-config', ['semestres'=> $semesters]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSemesterFromRequest $request)
    {
        $request->merge(['made_by' => Auth::user()->name]);

        $data = $request->validated();
        $semester = Semester::create($data);

        return redirect()->route('semesters.index')->with('success','Novo semestre cadastrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSemesterFromRequest $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if(!$semester = Semester::find($id)){
            return redirect()->back()->withErrors(['msg' => 'O item não se encontra disponível para a exclusão!']);
        }

        $semester->delete();
        return redirect()->route('semesters.index')->with(['success' => 'Item excluído com sucesso']);
    }
}
