<?php

namespace Modules\Comment\providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(CommentRepositoryServiceProvider::class);

        Route::prefix("comment")
            ->group(__DIR__ . "/../Routes/api.php");

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
    }
}
