<?php

namespace App\Providers;

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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
