<?php

namespace CodeDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class repositoryserviceprovider extends ServiceProvider
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
        $this->app->bind(
            'CodeDelivery\Repositories\CategoryRepository', 'CodeDelivery\Repositories\CategoryRepositoryEloquent');

    }
}
