@extends('adminlte::page')

@section('title', 'Listagem de alunos')

@section('body_data')
style="background-color: red;"
@stop

@section('content_header')
    {{-- <h1 class="text-center bg-white rounded md:text-start">Controle de Alunos</h1> --}}
@stop

@section('content')
    @can('admin-profile-1')
        @if(count($alunos) > 0)
            <x-container_structure_crud_alunos :contagem="count($alunos)">
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
                    <table id="alunosTable" class="table m-1 align-middle table-hover md:m-auto">
                        <thead class="table-light">
                            <tr>
                                {{-- <th><input type="checkbox" /></th> --}}
                                <th>Matrícula</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Semestre de Ingresso</th>
                                {{-- <th>Data de Criação</th> --}}
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alunos as $aluno)
                                <tr>
                                    {{-- <td><input type="checkbox" /></td> --}}
                                    <td data-title="Matrícula" class="ml-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $aluno->matricula }}</td>
                                    <td data-title="Nome">{{ $aluno->nome }}</td>
                                    <td data-title="Email">{{ $aluno->email }}</td>
                                    <td data-title="Telefone">{{ $aluno->telefone }}</td>
                                    <td data-title="Semestre de Ingresso">{{ $aluno->semestre_ingresso }}</td>
                                    {{-- <td data-title="Data de Criação">{{ $aluno->created_at }}</td> --}}
                                    <td>
                                        @can('admin-profile-1')
                                            <x-edit_aluno :aluno="$aluno"/>
                                            <x-delete_aluno :alunoID="$aluno->id"/>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </x-container_structure_crud_alunos>
        @else
            <p class="text-4xl text-center">Nenhum aluno está cadastrado!</p>
        @endif

        <x-form_modal_cadastro/>
    @endcan
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
