@extends('adminlte::page')

@section('title', 'Listagem de alunos')

@section('content_header')
    <h1 class="bg-white rounded md:text-start text-center">Área de Início</h1>
@stop

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
        </div>
    </div>
</div> --}}

@stop

@section('css')
    <style>

    </style>
@stop

@section('js')

@stop
