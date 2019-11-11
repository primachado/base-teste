<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\ImovelRepository::class, \App\Repositories\ImovelRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProprietarioRepository::class, \App\Repositories\ProprietarioRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TipoImovelRepository::class, \App\Repositories\TipoImovelRepositoryEloquent::class);
        //:end-bindings:
    }
}
