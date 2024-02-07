<?php

namespace Modules\Course\providers;

use Illuminate\Support\ServiceProvider;
use Modules\Course\Database\Repositories\Contracts\CourseInterface;
use Modules\Course\Database\Repositories\Repos\CourseRepository;

class CourseRepositoryPatternServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CourseInterface::class , CourseRepository::class);
    }
}
