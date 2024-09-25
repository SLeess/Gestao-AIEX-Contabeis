@extends('adminlte::page')

@section('title', 'Controle de Semestres')

@section('body-data')
@stop

@section('content_header')
@stop

@section('content')
<x-container_structure_crud_semesters :semestersCount="count($semestres)">
    <div class="mb-3 search-container">
        <div class="submit-line">
            <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar..." aria-label="Search">
            <button class="submit-lente" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    <div class="justify-center w-full d-flex justify-self-center justify-items-center">
        <div class="table-responsive">
        <table id="alunosTable" class="table m-1 align-middle table-hover md:m-auto" style="width: 98%;">
            <thead class="table-light">
                <tr>
                    <th>Identificador</th>
                    <th>Criado por</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($semestres as $semestre)
                    <tr>
                        <td data-title="Identificador" class="ml-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $semestre->identificador }}</td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>
                            @can('admin-profile-1')
                                <x-edit_aluno :aluno="$semestre"/>
                                <x-delete_aluno :alunoID="$semestre->id"/>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</x-container_structure_crud_semesters>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="{{ asset('css/crud_alunos.css') }}">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/crud_alunos.js') }}"></script>
@stop
