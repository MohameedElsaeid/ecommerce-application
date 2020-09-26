<?php

namespace App\Providers;

use App\Repositories\BrandRepository;
use App\Repositories\IBrandRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IBrandRepository::class, BrandRepository::class);
    }
}
