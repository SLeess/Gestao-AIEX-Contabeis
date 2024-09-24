<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * O caminho da home após login.
     */
    public const HOME = '/';

    /**
     * Registrar serviços no provedor (se necessário).
     */
    public function register(): void
    {
        //
    }

    /**
     * Método para definir as rotas da aplicação.
     */
    public function boot()
    {
        $this->configureRateLimiting();

        // Definir as rotas
        $this->mapRoutes();
    }

    /**
     * Definir as rotas da aplicação.
     */
    protected function mapRoutes()
    {
        // Rotas da API
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));

        // Rotas da Web
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // Rotas Admin
        Route::prefix('admin') // Define o prefixo "admin"
            ->middleware(['web', 'auth']) // Middlewares a serem aplicados
            ->namespace('App\Http\Controllers\Aiex_System\Admin') // Namespace do controlador
            ->group(base_path('routes/admin.php')); // Carrega o arquivo admin.php
    }

    /**
     * Configuração de limitação de taxa (se necessário).
     */
    protected function configureRateLimiting()
    {

    }
}
