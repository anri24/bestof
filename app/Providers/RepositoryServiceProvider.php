<?php

namespace App\Providers;

use App\Repositories\CityRepository;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\PropertyRepository;
use App\Repositories\PropertyRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PropertyRepositoryInterface::class,PropertyRepository::class);
        $this->app->singleton(CityRepositoryInterface::class,CityRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
