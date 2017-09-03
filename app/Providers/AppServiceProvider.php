<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Account\Domain\Repositories\Contracts\UserRepositoryInterface', 'App\Account\Domain\Repositories\UserRepository');
        $this->app->bind('App\Account\Domain\Repositories\Contracts\AccountRepositoryInterface', 'App\Account\Domain\Repositories\AccountRepository');

    }
}
