<?php

namespace Modules\Price\providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PriceServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(PriceRepositoryPatternServiceProvider::class);

        Route::prefix("price")
            ->group(__DIR__ . "/../Routes/api.php");

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
    }
}
