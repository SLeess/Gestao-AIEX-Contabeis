@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop
@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

@section('body')
    <div class="{{ $auth_type ?? 'login' }}-box" style="width: 100vw;height: 100vh;background: #081b29;display: grid;justify-content: center;align-content: center;">
        {{-- Card Box --}}
        <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

            {{-- Card Header --}}
            @hasSection('auth_header')
                        @yield('auth_header')
            @endif

            {{-- Card Body --}}
                @yield('auth_body')

            {{-- Card Footer --}}
            {{-- @hasSection('auth_footer')
                @yield('auth_footer')
            @endif --}}

        </div>

    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
