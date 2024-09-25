<?php

namespace App\Http\Controllers\Aiex_System\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateAlunoFromRequest;
use App\Models\Aiex_System\Aluno;
use App\Models\Aiex_System\Semester;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index()
    {
        return Aluno::all();;
        // return view('Pages.alunos', compact("alunos", "semesters"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateAlunoFromRequest $request, Aluno $aluno)
    {
        $telefone = str_replace('(', '', $request->get('telefone'));
        $telefone = str_replace(') ', '', $telefone);

        $data = $request->validated();
        $data['telefone'] = $telefone;

        // dd($data);
        $aluno = $aluno->create($data);

        return redirect()->route('alunos.index')->with('msg', 'Aluno registrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string|int $id)
    {
        if(!$aluno = Aluno::find($id))
            return back();

        return view('admin/aluno/show', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateAlunoFromRequest $request, string|int $id)
    {
        // dd(Aluno::find($id));
        if(!$aluno = Aluno::find($id))
            return back();

        $aluno->update($request->validated());

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$aluno = Aluno::find($id))
            return back();

        $aluno->delete();
        return redirect()->route('alunos.index');
    }
}
