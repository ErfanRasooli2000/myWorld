<?php

namespace Modules\User\providers;

use Illuminate\Support\ServiceProvider;

class UserRepositoryPatternServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind();
    }
}
