@extends('adminlte::auth.login-auth-page', ['auth_type' => 'login'])

@section('adminlte_css_pre')
    {{-- <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}"> <!-- CSS personalizado -->
@stop

@php
    $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login');
    $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register');
    $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset');
@endphp

{{-- @section('auth_header', __('adminlte::adminlte.login_message')) --}}

@section('auth_body')
    <div class="wrapper" style="margin: auto;">
        <form action="{{ $login_url }}" method="post" class="form">
            @csrf
            <h1 class="title oswald" style="margin-top: 13px; margin-bottom: -10px;">Inicio</h1>

            {{-- Email field --}}
            <div class="inp">
                <input type="email" name="email" class="input @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" style="background: transparent;" autofocus>
                <i class="fa-solid fa-user"></i>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Password field --}}
            <div class="inp">
                <input type="password" name="password" class="input @error('password') is-invalid @enderror"
                       placeholder="{{ __('adminlte::adminlte.password') }}">
                <i class="fa-solid fa-lock"></i>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="submit">
                {{ __('adminlte::adminlte.sign_in') }}
            </button>
            <p class="footer">Não tem conta? <a href="{{ $register_url }}" class="link">Por favor, Cadastre-se</a></p>
            @if($password_reset_url)
                <p class="my-0 footer">
                    <a class="link" href="{{ $password_reset_url }}">
                        {{ __('adminlte::adminlte.i_forgot_my_password') }}
                    </a>
                </p>
            @endif
        </form>
        <div class="banner">
            <h1 class="wel_text">&nbsp;&nbsp;Aiex@ Sistema</h1>
            <p class="para"></p>
        </div>
    </div>
@stop
