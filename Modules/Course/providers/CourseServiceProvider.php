<?php

namespace Modules\Course\providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CourseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(CourseRepositoryPatternServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");

        Route::prefix("course")
            ->middleware("api")
            ->group(__DIR__ . "/../Routes/api.php");
    }
}
