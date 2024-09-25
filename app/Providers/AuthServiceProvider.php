<?php

namespace App\Providers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    protected $polices = [

    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define('admin-profile-1', function (User $user) {
            return $user->access_level === 1;
        });
    }
}
