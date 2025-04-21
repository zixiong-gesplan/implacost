<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\NewsRepositoryInterface;
use App\Repositories\SQLiteNewsRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(NewsRepositoryInterface::class, SQLiteNewsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
