<?php

namespace Modules\User\providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(UserRepositoryPatternServiceProvider::class);

        Route::prefix("user")
            ->middleware(["api"])
            ->group(__DIR__ . "/../Routes/api.php");

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
    }
}
