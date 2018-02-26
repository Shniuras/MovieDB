<?php

namespace App\Providers;

use App\Http\Requests\StoreActorRequest;
use function foo\func;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        Gate::define('add-picture', function ($user){
           return $user->role == 'guest';
        });

        Gate::define('admin', function($user){
            return $user->role == 'admin';
        });

    }
}
