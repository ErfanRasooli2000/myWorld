<?php

namespace providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(PostRepositoryServiceProvider::class);

        Route::prefix("/post")->group(__DIR__ . "/../Routes/api.php");

        $this->loadMigrationsFrom("./../Database/Migrations");
    }
}
