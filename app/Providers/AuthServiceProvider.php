<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Tiempo de expiración del token
        Passport::tokensExpireIn(now()->addDays(7));

        // Rutas de 0Auth
        Passport::routes(function($router){
    		$router->forAccessTokens();
        });
        
        // Roles de un token
        Passport::tokensCan([
            'admin-status' => 'Admin tasks',
            'client-status' => 'Client tasks'
        ]);

        // Rol por defecto de un token
        Passport::setDefaultScope([
            'client-status'
        ]);


    }
}
