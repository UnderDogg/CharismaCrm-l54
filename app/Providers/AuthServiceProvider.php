<?php
namespace App\Providers;

use App\Models\Auth\User\User;
use App\Policies\Backend\BackendPolicy;
use App\Policies\Models\User\UserPolicy;
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
        /**
         * Models Policies
         */
        User::class => UserPolicy::class,
        /**
         * Without models policies
         */
        'backend' => BackendPolicy::class
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
