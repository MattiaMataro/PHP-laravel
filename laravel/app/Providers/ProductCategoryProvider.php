<?php

namespace App\Providers;

use App\Services\ProductCategoryService;
use Illuminate\Support\ServiceProvider;

class ProductCategoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProductCategoryService::class);
    }

    // SE IL COSTRUTTORE DEL SERIVIZIO -> NON <- È VUOTO
    //
    // public function register()
    // {
    //     $this->app->singleton(ProductCategoryService::class, function($app) {
    //         return new ProductCategoryService();
    //     });
    // }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
