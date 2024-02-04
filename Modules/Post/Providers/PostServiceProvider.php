<?php

namespace Modules\Post\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(PostRepositoryServiceProvider::class);

        Route::prefix("/post")
            ->middleware(["api"])
            ->group(__DIR__ . "/../Routes/api.php");

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
    }
}
