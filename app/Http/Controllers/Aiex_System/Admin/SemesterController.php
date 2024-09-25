<?php

namespace App\Http\Controllers\Aiex_System\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aiex_System\Semester;
use App\Http\Requests\StoreUpdateSemesterFromRequest;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */

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
        //
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
        //
    }
}
