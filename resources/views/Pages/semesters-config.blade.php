@extends('adminlte::page')

@section('title', 'Controle de Semestres')

@section('body-data')
@stop

@section('content_header')
@stop

@section('content')
    <div class="row reverse" style="justify-content: center;">
        <div class="mb-5 col-12 col-sm-12 col-md-12 col-lg-7">
            <x-semester.container_structure_crud_semesters :semestersCount="count($semestres)">
                <div class="mb-3 search-container">
                    <div class="submit-line">
                        <input type="text" id="searchInputSemesters" class="form-control searchInput" placeholder="Pesquisar..." aria-label="Search">
                        <button class="submit-lente" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="justify-center w-full d-flex justify-self-center justify-items-center">
                    <div class="table-responsive">
                    <table id="semestersTable" class="table m-1 align-middle table-hover md:m-auto" style="width: 98%;">
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
                                    <td>{{ $semestre->made_by }}</td>
                                    <td>
                                        @can('admin-profile-1')
                                            <x-general.form_delete :route="'semesters.destroy'" :id="$semestre->id"/>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </x-semester.container_structure_crud_semesters>
        </div>


        <div class="col-8 col-sm-12 col-md-12 col-lg-3 d-none d-sm-flex">
            <x-semester.form_semester_include>
                <form method="post" action="{{ Route('semesters.store') }}" id="semesterForm" class="g-3 needs-validation">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Identificador">Semestre Letivo</label>
                            <input type="text" name="identificador" class="form-control" id="identificador"
                                placeholder="Ex.: 2000-1 ou 2000-2" maxlength="6">
                            <small id="identificadorHelp" class="form-text text-muted">Informe o semestre</small>
                            {{-- @error('identificador')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="mt-1 row">
                        <div class="col-12">
                            <button style="--tw-bg-opacity: 0.85; background-color: rgb(22 163 74 / var(--tw-bg-opacity));" class="m-auto text-center btn btn-primary d-flex" type="submit">+</button>
                        </div>
                    </div>
                </form>
            </x-semester.form_semester_include>
        </div>

        {{-- For the responsive system, only mobile devices --}}
        <div class="d-block d-sm-none">
            <div class="row">
                <x-semester.form_modal_semester_include class="m-auto"/>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('css/crud_css/crud_semesters.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crud_css/crud_types.css') }}">
    <style>
        @media (max-width: 992.98px) {
            .reverse{
                display: flex;
                flex-direction: column-reverse;
            }
        }
        @media (min-width: 576px) {
            .d-sm-flex {
                display: -ms-flexbox !important;
                display: flex !important;
                justify-content: center;
            }
        }

        .addSemester{
            margin: 0 auto;
            padding: 5px 3px;
        }

        #semesterBtnConfig{
            /* position: absolute; */
            display: flex;
            width: 45px;
            height: 45px;
            background-color: #4caf50;
        }

        .flex-modal {
            display: flex !important;
            align-items: center;
            justify-content: center;
        }

    </style>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>

    <script src="sweetalert2.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crud_jss/crud_semesters.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crud_jss/crud_types.js') }}"></script>
    <script type="text/javascript">

    </script>
@stop
