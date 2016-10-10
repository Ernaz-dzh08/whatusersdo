<?php

namespace App\Keeper\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Keeper\Repositories\OrderLineRepositoryInterface',
            'App\Keeper\Repositories\Eloquent\OrderLineRepository'
        );

  
        $this->app->bind(
            'App\Keeper\Repositories\PlaceOrderRepositoryInterface',
            'App\Keeper\Repositories\Eloquent\PlaceOrderRepository'
        );

        $this->app->bind(
            'App\Keeper\Repositories\OrderRepositoryInterface',
            'App\Keeper\Repositories\Eloquent\OrderRepository'
        );
    }
}